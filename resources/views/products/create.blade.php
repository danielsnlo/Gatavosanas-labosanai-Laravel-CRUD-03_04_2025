    @extends('layouts.app', ['title' => 'Izveidot produktu'])

    @section('content')
    <h1>Izveidot produktu</h1>

    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nosaukums</label>
            <input type="text" class="form-control" id="nameInput" name="name"value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="qtyInput" class="form-label">Daudzums</label>
            <input type="text" class="form-control" id="qtyInput" name="qty" value="{{ old('qty') }}">
        </div>
        <div class="mb-3">
            <label for="descriptionInput" class="form-label">Apraksts</label>
            <input type="text" class="form-control" id="descriptionInput" name="description" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label for="priceInput" class="form-label">Cena</label>
            <input type="text" class="form-control" id="priceInput" name="price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Saglabāt">
        </div>
    </form>
    @endsection