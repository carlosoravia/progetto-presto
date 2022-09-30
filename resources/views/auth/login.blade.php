<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-2 d-flex justify-content-center">
            <div class="col-12 col-md-6 border border-white p-5 rounded wow-white w-50 bg-dark">
                <h1 class="mb-5">Login</h1>
                {{-- form di registrazione  --}}
                <div>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control wow-white">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control wow-white">
                        </div>
                        <button type="submit" class="btn btn-outline-warning btn-wow-yellow mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
