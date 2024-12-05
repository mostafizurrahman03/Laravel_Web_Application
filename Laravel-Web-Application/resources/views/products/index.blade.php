@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock_quantity }}</td>
                        <td><img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-thumbnail" style="width: 70px;"></td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-icon btn-edit">Edit</a>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-icon btn-show">Show</a>
                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-icon btn-delete"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $products->links() }}
    </div>
@endsection
