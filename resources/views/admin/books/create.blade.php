@extends('layouts.admin') <!-- Make sure this layout exists -->

@section('content')
<div class="container mt-5">
    <h2>Add New Book</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
            <input type="text" name="author" class="form-control" required value="{{ old('author') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (₹) <span class="text-danger">*</span></label>
            <input type="number" name="price" step="0.01" class="form-control" required value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Cover Image</label>
            <input type="file" name="cover" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Book</button>
        <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
