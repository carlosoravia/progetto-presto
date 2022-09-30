<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditForm extends Component
{
    public $articleId; //! non posso mettere id perchè è id è una keyword di livewire
    public $title;
    public $subtitle;
    public $body;

    public function mount($articleId)
    {
        $article = Article::find($articleId);
        $this->articleId = $article->id;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
    }

    public function updateArticle()
    {
        //! prendere l'articolo dal DB e aggiornarlo
        $article = Article::find($this->articleId);
        $article->update(
            [
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'body' => $this->body,
            ]
        );
        //! per togliere i campi una volta aggiornato l'articolo
        // $this->reset();
        return redirect(route('article.index'));
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
