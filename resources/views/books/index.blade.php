@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Available Books</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($books->count())
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">Author: {{ $book->author }}</p>
                            <p class="card-text">Price: ${{ $book->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No books available.</p>
    @endif
</div>
@endsection
