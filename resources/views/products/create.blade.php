@extends('layouts.app')

@section('title', 'Create New Product')

@section('content')
    <h2>Create New Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama">Product Name:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="prince">Price:</label>
            <input type="number" class="form-control" id="prince" name="prince" required>
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" required>
            {{-- <textarea class="form-control" id="description" name="description" required> --}}
        </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@endsection