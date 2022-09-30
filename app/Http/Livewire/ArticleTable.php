<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{
    //! Dopo aver implementato delete ed edit implemento l'ordine crescente/decrescente
    public $order = 'DESC';
    public $orderType = 'id';

    //! implemento il filtro per ricerca tramite query
    public $query = '';

    //! implementare filtro per data
    public $created_date = '';

    public function deleteArticle($id)
    {
        // $article = Article::find($id);
        // $article->delete();
        Article::find($id)->delete();
    }
    // articolo ritorna alla revisione
    public function returnToRevision($id)
    {
        // dd($id, $articles = Article::find(7));

        //! altro metodo
        $article = Article::find($id)->update(['is_accepted' => NULL]);
        // $article = Article::find($id);
        // $article->is_accepted = NULL;
        // dd($article->is_accepted);
        // $article->save();
    }

    public function changeOrderId()
    {
        $this->orderType = 'id';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }

    public function changeOrderTitle()
    {
        $this->orderType = 'title';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }

    public function changeOrderPrice()
    {
        $this->orderType = 'price';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }

    public function changeOrderCategory()
    {
        $this->orderType = 'category_id';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }

    public function changeOrderCreated()
    {
        $this->orderType = 'created_at';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }

    public function changeOrderUpdated()
    {
        $this->orderType = 'updated_at';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }
    public function changeOrderIsAccepted()
    {
        $this->orderType = 'is_accepted';
        $this->order == 'ASC' ? $this->order = 'DESC' : $this->order = "ASC";
    }

    public function editArticle($id)
    {
        Article::find($id)->edit();
    }

    public function render()
    {
        //! implemento il filtro per ricerca tramite query
        if ($this->query == '') {
            //! gestisco l'ordine crescente/decrescente - se definisco $article in questo modo allora non ho bisogno di far passare alla view Article::all()
            // $articles = Article::orderBy($this->orderType, $this->order)->paginate(3);
            //! il paginate da errore quando si cambia ordine dai bottoni e poi si cerca di cambiare pagina
            $articles = Article::orderBy($this->orderType, $this->order)->get();
        } else {
            // $articles = Article::where('title', 'LIKE', "%$this->query%")->orderBy($this->orderType, $this->order)->paginate(3);
            $articles = Article::where('title', 'LIKE', "%$this->query%")->orderBy($this->orderType, $this->order)->get();
        }

        //! livewire, quando renderizzi il componente, passa a questa vista una variabile articles che contiene tutti gli articoli presenti all'interno del DB
        // return view('livewire.article-table', ['articles' => Article::all()]);
        return view('livewire.article-table', ['articles' => $articles]);
    }
}
