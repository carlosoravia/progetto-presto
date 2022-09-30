
@if(session()->has('message'))
<div class="flex flex-row justify-center my-2 alert alert-success">
    {{session('message')}}
</div>
@endif
<div class="border border-white p-5 rounded my-5 wow-white">
    <h1 class="">Crea articolo</h1>
    <form wire:submit.prevent="storeArticle">
        @csrf
        <!-- title -->
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control wow-red @error('title') is-invalid @enderror" wire:model.lazy="title" aria-describedby="emailHelp">
            @error('title') <span class="error text-dark bg-info shadow p-2 rounded border">{{ $message }}</span> @enderror
            {{--{{$title}}--}}
        </div>

        <!-- subtitle -->
        <div class="mb-3">
            <label class="form-label">Sottotitolo</label>
            <input type="text" name="title" class="form-control wow-red @error('subtitle') is-invalid @enderror" wire:model.lazy="subtitle">
            @error('subtitle') <span class="error text-dark bg-info shadow p-2 rounded border">{{ $message }}</span> @enderror
            {{--{{$subtitle}}--}}
        </div>

        <!-- price -->
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" step=".01" class="form-control wow-red @error('price') is-invalid @enderror" wire:model.lazy="price">
            @error('price') <span class="error text-dark bg-info shadow p-2 rounded border">{{ $message }}</span> @enderror
        </div>

        <!-- categories -->
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select wire:model.defer="category" name="category_id" class="form-control wow-red @error('category') is-invalid @enderror">
                <option value="">Scegli la tua categoria</option>
                @foreach($categories as $category)
                <!-- //! le cateogorie non le ho in questa vista - devo prenderle dal DB -> vado nell'ArticleController -->
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category') <span class="error text-dark bg-info shadow p-2 rounded border">{{ $message }}</span> @enderror
        </div>

        <!-- images -->
        <div class="mb-3">
            <label for="price">Immagine</label>
            <input type="file" name="images" multiple class="form-control wow-red @error('temporary_images.*') is-invalid @enderror" wire:model="temporary_images" placeholder="img">
            @error('temporary_images.*') <span class="error text-dark bg-info shadow p-2 rounded border">{{ $message }}</span> @enderror
        </div>

        <!-- preview -->
        @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview</p>
                <div class="row border border-4 border-info rounded shadow py-4 bg-dark">
                    @foreach($images as $key => $image)
                    <div class="col my-3">
                        {{-- !importante! è diverso dal video --}}
                        <img class="img-fluid mx-auto shadow rounded" src="{{$image->temporaryUrl()}}"></img>
                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- body -->
        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control wow-red @error('body') is-invalid @enderror" wire:model.lazy="body"></textarea>
            @error('body') <span class="error text-dark bg-info shadow p-2 rounded border">{{ $message }}</span> @enderror
            {{--{{$body}}--}}
        </div>

        <!-- submit button -->
        <button type="submit" class="btn btn-outline-warning">Crea articolo</button>
    </form>
</div>


