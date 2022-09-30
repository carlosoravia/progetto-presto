<x-layout>
    <div class="container">
        <div class="row">
            @forelse ($articles as $article)
            <div class=" justify-content-center col-12 col-md-6 p-5">
                <x-article-card :article="$article"/>
            </div>
            @empty
            <x-article-empty-page/>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>
</x-layout>
