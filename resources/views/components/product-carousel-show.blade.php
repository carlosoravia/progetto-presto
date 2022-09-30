@if(count($article->images) > 1)
<div class="container-fluid">
    <div id="carouselProduct" class="carousel slide my-product-carousel-small rounded" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($article->images as $image)
            <div class="carousel-item @if($loop->first)active @endif">
                <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


@else
<img src="{{count($article->images) == 1 ? Storage::url($article->images()->first()->path) : '/img/default.png'}}" class="card-img-top" alt="">
@endif
