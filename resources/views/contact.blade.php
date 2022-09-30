<x-layout>
    <div class="container">
        <div class="row mx-2 border border-white p-5 rounded my-5 wow-white">
            <div class="col-12 my-4">
                <h1>Contattaci</h1>
                <p class="text-warning">Un nostro associato ti risponderà il più presto possibile !</p>
            </div>
            <div class="col-12">
                <!-- TODO: Da implementare - non funziona -->
                <form wire:submit.prevent="contactSent">
                    <div class="mb-3">
                        <label class="form-label">Nome completo</label>
                        <input type="text" class="form-control wow-red" placeholder="Mario Rossi" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero di telefono</label>
                        <input type="text" class="form-control wow-red" placeholder="+39-1234567890" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control wow-red" placeholder="ginopippofreebooter@gmail.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Messaggio</label>
                        <textarea class="form-control wow-red" name="message" id="" cols="30" rows="10" placeholder="Messaggio"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-wow-yellow">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
