@extends('layout.template')

@section('title', 'Publishers')

@section('container')
    @forelse ($publishers as $publisher)
        <div class="container w-50 bg-secondary p-0 mt-4">
            <p class="text-light mb-0 ms-2">{{ $publisher->name }}</p>
            <p class="text-light mb-0 ms-2">Address - {{ $publisher->address }}</p>
            <p class="text-light mb-0 ms-2">Phone - {{ $publisher->phone }}</p>
            <p class="text-light mb-0 ms-2">Email - {{ $publisher->email }}</p>
        </div>
        <div class="container w-50 p-0">
            <div class="row g-1">
                @forelse ($publisher->books as $book)
                    <div class="col-10 col-sm-6 col-md-3">
                        <div class="card mb-1">
                            <img src="{{ $book->image }}" class="card-img-top" alt="..." height="250px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">by</p>
                                <p class="card-text">{{ $book->author }}</p>
                                <a href="/index/{{ $book->id }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Empty Data...</h3>
                @endforelse
            </div>
        </div>
    @empty
        <h2>Empty Data...</h2>
    @endforelse
@endsection
