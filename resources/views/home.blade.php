<x-layout>
    <div class="container-fluid d-block w-100">
        <div class="row p-3">
            <div class="col-12 mb-3">
                <h1 class="text-warning display-1">Presto</h1>
                @if (session('message'))
                <div class="alert alert-success"> {{session('message')}}</div>
                @endif
            </div>
            <div class="row my-auto">
                <div class="col-12 bg-secondary d-md-block rounded wow">
                    <div class="search-bar ">
                        <div class="search">
                            <div class="wow d-block">
                                <form action="{{route('article.search')}}" method="GET"  class="input-group w-100">
                                    <input name="searched" type="serach" class="form-control" placeholder="Search By Title" aria-describedby="button-add">
                                    <button class="btn btn-dark" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 mx-auto">
            <div class="d-none d-lg-block col-md-8 mx-auto">
                <x-carousel-home/>
            </div>
            <div class="d-none d-lg-block col-4 p-4 mx-auto">
                <x-category-list-home/>
            </div>
        </div>
        <div class="row d-none my-2 d-md-flex justify-content-around">
            <x-labels-home />
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-5">
                <h2 class="display-1 text-center">{{__('ui.home')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="d-none d-md-flex justify-content-evenly flex-wrap">
            @foreach($articles as $article)
                <div class="col-md-4 col-xl-4 d-flex mx-4 mb-5">
                    <x-article-card :article="$article" />
                </div>
                @endforeach
            </div>
            {{-- da capire come creare componente da degli errori --}}
            <div id="carousel-mobile-control" class="carousel slide d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($articles as $article)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <x-article-card :article="$article"/>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-mobile-control" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-mobile-control" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row mt-5 mb-3 d-flex justify-content-around d-md-none">
            <x-labels-home />
        </div>
    </div>
    <div class="container-fluid mx-auto p-5">
        <div class="col-12">
            <x-job-offer-home />
        </div>
        <div class="row mx-auto">
            <div class="col-md-6 mx-auto d-flex justify-content-center my-auto">
                <div class="d-none d-md-block bg-dark rounded wow-yellow">
                    <div class="swiper-home mySwiper">
                        <div class="swiper-wrapper">
                            <x-card-swiper-carousel/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <x-caption-swiper-home />
            </div>
        </div>
    </div>
</x-layout>


{{-- <button class="btn btn-danger"><i class="bi bi-bookmark-heart-fill"></i>0</button>
                    <button class="btn btn-danger"><i class="bi bi-cart4"></i>0</button> --}}
