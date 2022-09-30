<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleForm extends Component
{

    use WithFileUploads;

    public $title;
    public $subtitle;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    public $article;

    protected $rules = [
        'title' => 'required|min:6',
        'subtitle' => 'required|min:6',
        'body' => 'required|min:10|max:20000',
        'price' => 'required|numeric|min:0',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        // 'title.required' => 'Il titolo non può essere vuoto.',
        // 'subtitle.required' => 'Il sottotitolo non può essere vuoto.',
        // 'body.required' => 'Il contenuto non può essere vuoto.',
        // 'title.min' => 'Il titolo deve avere almeno 6 caratteri.',
        // 'subtitle.min' => 'Il sottotitolo deve avere almeno 6 caratteri.',
        // 'body.min' => 'Il contenuto deve avere almeno 10 caratteri.',
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.images' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine deve essere massimo di 1mb',
        'images.image' => 'L\'immagine deve essere un\'immagine',
        'images.max' => 'L\'immagine deve essere massimo di 1mb',
    ];

    //! Hook => funzione automatica che scatta quando avvene un qualcosa
    //! Validazione frontend

    public function updated($property)
    {
        $this->validateOnly($property);
    }


    public function cleanForm()
    {
        $this->title = '';
        $this->subtitle = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function storeArticle()
    {
        $this->validate();

        $this->article = Category::find($this->category)->articles()->create($this->validate());
        Auth::user()->articles()->save($this->article);
        if(count($this->images)){
            foreach($this->images as $image){
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path'=>$image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);

            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
            $this->cleanForm();

            return redirect(route('home'))->with('message', "Articolo inviato con successo!");
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
