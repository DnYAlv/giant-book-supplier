@extends('layout.template')

@section('title')
    {{ $book->title }}
@endsection

@section('container')
    <div class="container w-50 bg-secondary p-0 mt-4">
        <h3 class="text-light fw-normal fs-3">Book Detail</h3>
    </div>
    <div class="container w-50 p-0 mt-3 mb-2">
        <div class="card">
            <img src="{{ $book->image }}" class="card-img-top" alt="..." height="500px">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $book->title }}</h5>
                <h6 class="card-subtitle">Author: {{ $book->author }}</h6>
                <h6 class="card-subtitle mt-1">Publisher: {{ $book->publisher->name }}</h6>
                <h6 class="card-subtitle mt-1">Year: {{ $book->year }}</h6>
                <h6 class="card-subtitle mt-1">Synopsis:</h6>
                <p class="card-text">{{$book->synopsis}}</p>
            </div>
        </div>
    </div>
@endsection
