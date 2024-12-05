<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->paginate(15);
        return view('products.index',['products'=> $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {

        try {$products = new Product();
            $products->name = $request->name;
            $products->description = $request->description;
            $products->price = $request->price;
            $products->stock_quantity = $request->stock_quantity;
           
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image', 'public');
                 $products->image = $imagePath;

            }

            $products->save();
           
            return redirect('/products')->with('success', 'product record created successfully.');

        } catch (\Exception $e) {
            return redirect('/products/create')->with('error',$e->getMessage());
        }

    }
    public function edit($id)
    {
        $product = Product::find( $id);
        
        
        return view('products.edit',['product'=> $product ]);
    }

    // Update product
    public function update(Request $request)
    {
        
        
            $product = Product::find($request->id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock_quantity = $request->stock_quantity;
           
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image', 'public');
                 $product->image = $imagePath;

            }

            $product->save();
           
            return redirect()->route('products.index')->with('success', 'Product updated successfully.');

        
        
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product'=> $product ]);
    }


    // Delete product
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}




