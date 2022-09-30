<div class="container d-inline p-0">
    <form action="{{route('set_language_locale', $lang)}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline-secondary mx-2">
            <span class="flag-icon flag-icon-{{$nation}}"></span>
        </button>
    </form>
</div>
