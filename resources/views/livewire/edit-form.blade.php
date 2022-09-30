<div>
    <form wire:submit.prevent="updateArticle">

        <!-- title -->
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" wire:model.lazy="title" aria-describedby="emailHelp">
            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- subtitle -->
        <div class="mb-3">
            <label class="form-label">Sottotitolo</label>
            <input type="text" name="title" class="form-control" wire:model.lazy="subtitle">
            @error('subtitle') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- categories -->
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                <!-- //! le cateogorie non le ho in questa vista - devo prenderle dal dp -> vado nell'ArticleController -->
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <!-- body -->
        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control" wire:model.lazy="body"></textarea>
            @error('body') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- submit button -->
        <button type="submit" class="btn btn-outline-warning">Modifica articolo</button>
    </form>
</div>
