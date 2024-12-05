@extends('layouts.app')

@section('title')
    Product Edit
@endsection

@section('bread_controller')
    <a href="index.html">Product</a>
@endsection

@section('bread_action')
    Edit
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Product
        </div>

        <div class="card-body">
            <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ol>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ol>
                    </div>
                @endif

                <div class="mb-3">
                    <label class="custom-control-label">Product Name</label>
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input class="form-control" type="text" name="name" value="{{$product->name}}">
                </div>


                <div class="mb-3">
                    <label class="custom-control-label">Product Description</label>
                    <textarea class="form-control" name="description" placeholder="product description">{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="custom-control-label">Product price</label>
                    <input class="form-control" type="number" name="price" value="{{$product->price}}" placeholder="product price"
                           required>
                </div>
                <div class="mb-3">
                    <label class="custom-control-label">Product Stock Quantity</label>
                    <input class="form-control" type="number" name="stock_quantity" value="{{$product->stock_quantity}}" laceholder="product stock quantity"
                           required>
                </div>
                <div class="mb-3">
                    <label class="custom-control-label">Product Image</label>
                    <!-- Display current image if it exists -->
                    @if ($product->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-thumbnail" style="width: 150px;">
                        </div>
                    @endif

                    <!-- File input for uploading a new image -->
                    <input class="form-control" type="file" name="image">
                </div>


                <br>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
