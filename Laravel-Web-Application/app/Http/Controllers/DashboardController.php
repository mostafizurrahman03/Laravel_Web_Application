<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalStock = Product::sum('stock_quantity');
        
        return view('dashboard',['totalUsers' => $totalUsers,'totalProducts' => $totalProducts, 'totalStock'=>$totalStock]);
    }
}
