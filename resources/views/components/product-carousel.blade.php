@if(count($articleToCheck->images) > 1)
<div class="container-fluid d-flex carousel-sigle-product justify-content-center d-md-none">
    <div id="carouselProduct" class="carousel slide my-product-carousel-small" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach($articleToCheck->images as $image)
            <div class="carousel-item @if($loop->first)active @endif">
                <img src="{{$image->getUrl(300,300)}}" class="img-fluid p-3 rounded h-100 w-100" alt="">
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
<div class="container-fluid d-none d-md-block">
    <div id="carousel-lapptop" class="carousel slide my-product-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-inner">

                @foreach($articleToCheck->images as $image)
                <div class="carousel-item @if($loop->first)active @endif">
                    <img src="{{$image->getUrl(300,300)}}" class="img-fluid p-3 rounded" alt="">
                </div>
                @endforeach

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-lapptop" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-lapptop" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@else
<img src="{{count($articleToCheck->images) == 1 ? Storage::url($articleToCheck->images()->first()->path) : '/img/default.png'}}" class="card-img-top" alt="">
@endif
