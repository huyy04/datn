<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Admin\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function index(){
            $products = Product::all();
            return response()->json($products);
        }
        public function store(Request $request)
        {

        }
}
