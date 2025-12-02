@extends('layouts.app')

@section('title', 'Tampilan Product')


@section('content')
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $products->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama">Product Name:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $products->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="prince">Price:</label>
            <input type="number" class="form-control" id="prince" name="prince" value="{{ $products->prince }}" required>
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $products->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection