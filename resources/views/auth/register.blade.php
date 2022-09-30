<x-layout>
    <div class="container mt-5">
        <div class="row my-2 d-flex justify-content-center">
            <div class="col-12 col-md-6 border border-white p-5 rounded wow-white w-50 bg-dark">
                <h1 class="mb-5">Registrati</h1>
                {{-- form di registrazione  --}}
                <div>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="name" class="form-control wow-white">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control wow-white">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control wow-white">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control wow-white">
                        </div>
                        <button type="submit" class="btn btn-outline-warning mt-3 btn-wow-yellow">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
