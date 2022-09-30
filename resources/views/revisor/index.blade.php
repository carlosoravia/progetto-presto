<x-layout>
@if($articleToCheck)
<div class="container-fluid">
    <div class="row w-50">
        <div class="col-12">
            <div id="gallery">
                @if($articleToCheck->images)
                @foreach ($articleToCheck->images as $image)
                <div class="card mb-3 bg-dark">
                    <div class="row p-2">
                        <div class="col-12 col-md-6">
                            <img src="{{$image->getUrl(300,300)}}" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="card mb-3 bg-dark">
                            <h5 class="">Tags</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{$label}}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="tc-accent">Revisioni Immagini</h5>
                                <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                <p>Contenunto Ammiccante: <span class="{{$image->racy}}"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="row px-4 py-5 my-5 text-center">
        <div class="col-12">
            <h1 class="display-5 fw-bold">Titolo: <span>{{$articleToCheck->title}}</span></h1>
        </div>
        <div class="col-12 my-4">
            <p class="lead mb-4">Descrizione: <span>{{$articleToCheck->subtitle}}</span></p>
        </div>
        <div class="col-12">
            <p class="lead mb-4">Caption: {{$articleToCheck->body}}</p>
        </div>
        <div class="col-12">
            <div class="d-grid gap-2 d-flex justify-content-center">
                <form action="{{route('revisor.acceptArticle', ['article'=>$articleToCheck])}}" method="POST">
                    @csrf
                    @method("PATCH")
                    <button type="submit" class="btn btn-success">Accetta</button>
                </form>
                <form action="{{route('revisor.rejectArticle', ['article'=>$articleToCheck])}}" method="POST">
                    @csrf
                    @method("PATCH")
                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
    @else
    <x-revisor-empty-page />
    @endif
</x-layout>
