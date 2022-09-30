<div class="container-fluid border border-warning p-3 rounded wow-yellow d-block">
    <div id="carouselHome" class="carousel slide my-carousel rounded" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active h-100 text-center text-bg-dark bg-secondary">
                <div class="cover-container d-flex w-100 my-carousel p-3">
                    <main class="px-3 my-auto w-100">
                        <h1>{{__('ui.nuovaCategoria')}}</h1>
                        <p class="lead">{{__('ui.cliccaBottone')}}</p>
                        <p class="lead">
                        <a href="#" class="btn btn-lg btn-outline-danger fw-bold text-dark">{{__('ui.visita')}}</a>
                        </p>
                    </main>
                </div>
            </div>
            <div class="carousel-item h-100 text-center text-bg-dark bg-secondary">
                <div class="cover-container d-flex w-100 my-carousel p-3">
                    <main class="px-3 my-auto w-100">
                        <h1>{{__('ui.tecnologia')}}</h1>
                        <p class="lead">{{__('ui.mese')}}<span class="text-decoration-underline">Informatica </span>{{__('ui.sconti')}}</p>
                        <p class="lead">
                        <a href="#" class="btn btn-lg btn-outline-danger fw-bold text-dark">{{__('ui.visita')}}</a>
                        </p>
                    </main>
                </div>
            </div>
            <div class="carousel-item h-100 text-center text-bg-dark bg-secondary">
                <div class="cover-container d-flex w-100 my-carousel p-3">
                    <main class="px-3 my-auto w-100">
                        <h1>{{__('ui.chiSiamo')}}</h1>
                        <p class="lead">{{__('ui.scopri')}}</p>
                        <p class="lead">
                        <a href="{{route('contact')}}" class="btn btn-lg btn-outline-danger fw-bold text-dark">{{__('ui.visita')}}</a>
                        </p>
                    </main>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
