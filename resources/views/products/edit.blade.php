@extends('layout')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <br>
        <input type="text" name="name" value="{{ $product->name }}" required>
<br>
        <label>Price:</label>
        <br>
        <input type="text" name="price" value="{{ $product->price }}" required>
<br>
        <label>Quantity:</label>
        <br>
        <input type="text" name="quantity" value="{{ $product->quantity }}" required>
        <br>
        <br>

        <button type="submit" class="btn btn-primary my-3" >Update Product</button>
    </form>
@endsection
