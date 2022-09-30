<div class="container category-container w-75 border border-danger rounded bg-dark p-0">
    <ul class="list-group list-group-flush">
        @foreach ($categories as $category)
        <li class="list-group-item bg-dark"><a class="btn btn-outline-danger btn-wow-white w-100 h-100" href="{{route('categoryShow', $category)}}">{{($category->name)}}</a></li>
        @endforeach
    </ul>
</div>

