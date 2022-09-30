<div class="card my-2 text-bg-dark bg-dark wow-yellow border border-danger">
    <ul class="list-group list-group-flush">
        <li class="list-group-item bg-dark">
            <div class="row">
                <div class="col-6 mx-auto">
                    <i class="bi bi-person-circle m-3 text-white"></i><span class="text-white">{{$article->user->name}}</span>
                </div>
                <div class="col-6 mx-auto">
                    <p class="fst-italic text-end me-4 text-white">{{$article->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </li>
    </ul>
    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300,300) : '/img/default.png'}}" class="card-img-top rounded" alt="">
    <div class="card-body my-2">
        <h1 class="card-title">{{substr($article->title,0,20)}}...</h1>
        <h3 class="card-text">{{$article->subtitle}}</h3>
        <p class="card-text text-price">{{$article->price}} €</p>
        <a href="{{route('categoryShow', ['category'=>$article->category])}}" class="card-text btn btn-outline-danger btn-wow-red">{{$article->category->name}}</a>
        <p class=" my-3"></p>
        <a href="{{ route('article.show' , $article)}}" class="card-text btn btn-outline-warning btn-wow-yellow">{{__('ui.scopriDiPiu')}}</a>
    </div>
</div>
