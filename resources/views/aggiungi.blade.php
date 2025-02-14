<x-layout>
    <header class="container-fluid header-custom">
        <div class="container text-center">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12 m-0 d-flex justify-content-center">
                <form class="form-custom" method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Bicicletta rossa" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Descrizione dell'articolo" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="10€" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Aggiungi l'articolo</button>
                </form>
            </div>
        </div>
    </header>
</x-layout>