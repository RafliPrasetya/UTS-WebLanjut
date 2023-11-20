<!-- resources/views/catalog/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Catalog of Flowers</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($catalogs as $catalog)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $catalog->image }}" alt="{{ $catalog->name }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $catalog->name }}</h5>
                            <p class="card-text">{{ $catalog->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Price: {{ $catalog->price }}</li>
                            <li class="list-group-item">Stock: {{ $catalog->stock }}</li>
                        </ul>
                        <div class="card-footer">
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No flowers available.</p>
            @endforelse
        </div>
    </div>
@endsection
