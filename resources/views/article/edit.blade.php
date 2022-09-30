<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica articolo</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <livewire:edit-form articleId="{{$article->id}}" />
            </div>
        </div>
    </div>
</x-layout>