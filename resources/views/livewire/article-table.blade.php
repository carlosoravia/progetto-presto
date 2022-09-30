<div class="container-fluid">
    <input type="text" wire:model="query" placeholder="Cerca Titolo" class="form-control my-2">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col" wire:click="changeOrderId">
                    <div class="btn btn-outline-light">
                        Id
                    </div>
                </th>
                <th scope="col" wire:click="changeOrderTitle">
                    <div class="btn btn-outline-light">
                        Titolo
                    </div>
                </th>
                <th scope="col" wire:click="changeOrderPrice">
                    <div class="btn btn-outline-light">
                        Price
                    </div>
                </th>
                <th scope="col" wire:click="changeOrderCategory">
                    <div class="btn btn-outline-light">
                        Category
                    </div>
                </th>
                <th scope="col" wire:click="changeOrderCreated">
                    <div class="btn btn-outline-light">
                        Creato il
                    </div>
                </th>
                <th scope="col" wire:click="changeOrderUpdated">
                    <div class="btn btn-outline-light">
                        Modificato il
                    </div>
                </th>
                <th scope="col" wire:click="changeOrderIsAccepted">
                    <div class="btn btn-outline-light">Stato Revisione</div>
                </th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(count($articles) > 0)
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{substr($article->title,0,20)}}...</td>
                <td>{{$article->price}}€</td>
                <td>{{$article->category->name}}</td>
                <td>{{$article->created_at->format('d/m/y')}}</td>
                <td>{{$article->updated_at->format('d/m/y')}}</td>
                @if($article->is_accepted == 1)
                <td>Accettato</td>
                @elseif($article->is_accepted === NULL)
                <td>Non Revisionato</td>
                @else
                <td>Rifiutato</td>
                @endif
                <td>
                    <a href="{{route('article.show', $article)}}" class="btn btn-outline-success me-2">Mostra</a>
                    @if(Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('article.edit', $article)}}" class="btn btn-outline-danger me-2">Modifica</a>
                    <button class="btn btn-outline-primary me-2" wire:click="deleteArticle({{$article->id}})">Cancella</button>
                    <button class="btn btn-outline-warning" wire:click="returnToRevision({{$article->id}})">Revisione</button>
                    @endif
                </td>
            </tr>
            @endforeach
            @else
            <div class="my-2">Nessun risultato per la chiave: <strong>{{$query}}</strong></div>
            @endif
        </tbody>
    </table>
</div>
