@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center">Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Add Product</a>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" >STT</th>
                    <th scope="col" >Name</th>
                    <th scope="col" >Price</th>
                    <th scope="col" >Quantity</th>
                    <th scope="col" >Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th style="text-align:center;"  scope="row">{{ $loop->iteration }}</th>
                        <td style="text-align:center;">{{ $product->name }}</td>
                        <td style="text-align:center;">{{ $product->price }}</td>
                        <td style="text-align:center;">{{ $product->quantity }}</td>
                        <td style="text-align:center;">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
