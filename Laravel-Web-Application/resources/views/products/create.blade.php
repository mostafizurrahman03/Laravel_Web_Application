@extends('layouts.app')

@section('title')
    Product Create
@endsection

@section('bread_controller')
    <a href="index.html">Product</a>
@endsection

@section('bread_action')
    create
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            New Product
        </div>

        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

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
                    <input class="form-control" type="text" name="name" placeholder="Enter the Product name" required>
                </div>


                <div class="mb-3">
                    <label class="custom-control-label">Product Description</label>
                    <textarea class="form-control" type="text" name="description" placeholder="product description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="custom-control-label">Product price</label>
                    <input class="form-control" type="number" name="price" placeholder="product price"
                           required>
                </div>
                <div class="mb-3">
                    <label class="custom-control-label">Product Stock Quantity</label>
                    <input class="form-control" type="number" name="stock_quantity" placeholder="product stock quantity"
                           required>
                </div>
                <div class="mb-3">
                    <label class="custom-control-label">Product Image</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <br>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
