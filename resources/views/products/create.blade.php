@extends('layout')

@section('content')
<br>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <br>
        <input type="text" name="name" required>
<br>
        <label>Price:</label>
        <br>
        <input type="text" name="price" required>
<br>
        <label>Quantity:</label>
        <br>
        <input type="text" name="quantity" required>
<br>
<br>
        <button type="submit" class="btn btn-primary my-3">Add Product</button>
    </form>
@endsection
