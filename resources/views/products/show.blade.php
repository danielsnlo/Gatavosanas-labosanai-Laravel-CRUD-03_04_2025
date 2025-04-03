@extends('layouts.app', ['title' => 'Produkts: ' . $product->name])

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Daudzums: {{ $product->qty }}</li>
            <li class="list-group-item">Cena: {{ $product->getPriceEur() }}</li>
            <li class="list-group-item">Apraksts: {{ $product->description }}</li>
        </ul>
    </div>
@endsection