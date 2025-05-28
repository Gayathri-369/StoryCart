@extends('admin.layout')

@section('content')
<h2>Manage Books</h2>

<a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3">Add New Book</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td><img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" width="80" onerror="this.src='{{ asset('images/default.jpg') }}'"></td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>₹{{ number_format($book->price, 2) }}</td>
            <td>
                <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this book?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
