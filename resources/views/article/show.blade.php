<x-layout>

<div class="container">
    <div class="row d-flex align-items-center my-4">
        <div class="col-12 col-md-6 d-block">
            <x-product-carousel-show :article="$article"/>
        </div>
        <div class="col-md-6 p-5">
            <div class="text-wrap">
                <h1 class="text-warning">{{$article->title}}</p>
                <h5 class="my-5">{{$article->subtitle}}</h5>
                <h5 class="mb-5 text-warning">{{$article->price}} €</h5>
                <p>{{$article->body}}</p>
            </div>
        </div>
    </div>
</div>
</x-layout>
