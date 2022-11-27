@extends('layout.template')

@section('title', 'Home Page')

@section('container')
    <div class="container w-50 bg-secondary p-0 mt-4">
        <h3 class="text-light fw-normal fs-1">Book List</h3>
    </div>

    <div class="container w-50 p-0">
        <div class="row g-1">
            @forelse ($books as $book)
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
@endsection
