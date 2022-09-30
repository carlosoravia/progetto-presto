<x-layout>

<div class="container mt-5 rounded d-flex p-3 text-center flex-column border p-5 bg-dark wow-red">
    <div class="px-3 my-auto">
        <h1 class="d-md-display-1 mb-3">{{__('ui.choose')}}</h1>
        <p class="lead d-md-display-5 mb-3">{{__('ui.cosaFare')}}</p>
        <p class="lead d-block mt-5">
        <a href="{{route('home')}}" class="btn btn-lg btn-outline-light fw-bold border-white text-dark mx-4 mb-3 btn-wow-white">Vai alla Home</a>
        <a href="{{route('article.create')}}" class="btn btn-lg btn-outline-danger fw-bold border-white text-dark mx-4 mb-3 btn-wow-red">Crea Articolo</a>
        </p>
    </div>
</div>

</x-layout>
