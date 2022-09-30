<div class="wow p-0">
    <div class="col-12 search-bar justify-content-center d-flex d-md-block mx-auto rounded bg-secondary">
        <div class="search p-2">
            <form action="{{route('article.search')}}" method="GET"  class="input-group">
                <input name="searched" type="serach" class="form-control" placeholder="Search By Title" aria-describedby="button-add">
                <button class="btn btn-dark" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</div>
