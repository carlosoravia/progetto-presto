<x-layout>
    <div class="container-fluid">
        <div class="row text-center">
            @if ($category->article === NULL)
            <div class="col-md-6 col-xl-3 m-4">

            </div>
            @else
            <div class="col-md-6 col-xl-3 m-4">
                <h1>Esplora la Categoria: {{$category->name}}</h1>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="d-md-flex justify-content-center flex-wrap">
            @forelse ($articles as $article )
            <div class="col-md-4 col-xl-4 m-5">
                <x-article-card :article="$article"/>
            </div>
            @empty
        </div>
    </div>
    <x-category-empty-page/>
@endforelse

</x-layout>
