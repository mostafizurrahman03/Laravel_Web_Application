@extends('layouts.app')

@section('title')
    Product Details
@endsection

@section('bread_controller')
    <a href="{{ route('products.index') }}" class="text-teal">Product</a>
@endsection

@section('bread_action')
    Details
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0">

                    <div class="card-header bg-teal text-white text-center">
                        <h1 class="mb-0">Product Details</h1>
                    </div>

                    <div class="card-body p-5">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered text-center" style="font-size: 1.5rem;">
                                <tbody>
                                    <tr>
                                        <td class="bg-dark text-white" style="width: 25%; padding: 1rem;">Product Name</td>
                                        <td style="padding: 1rem;">{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-dark text-white" style="padding: 1rem;">Description</td>
                                        <td style="padding: 1rem;">{{ $product->description }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-dark text-white" style="padding: 1rem;">Price</td>
                                        <td style="padding: 1rem;">{{ number_format($product->price, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-dark text-white" style="padding: 1rem;">Stock Quantity</td>
                                        <td style="padding: 1rem;">{{ $product->stock_quantity }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-dark text-white" style="padding: 1rem;">Product Image</td>
                                        <td style="padding: 1rem;">
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-thumbnail" style="width: 150px;">
                                            @else
                                                No image available
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('products.index') }}" class="btn btn-primary px-2">Back to Products</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
