<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\RamSize;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    public function index(){
        $productVariants = ProductVariant::query()->with(['product','color','size','ram_size'])->get();
        return view('admin.thuoctinh.list', compact('productVariants'));
    }
    public function create(){
        $product = Product::all();
        $objColor = Color::all();
        $objSize = Size::all();
        $ram_size = RamSize::all();
        return view('admin.thuoctinh.add', compact('product','objColor','objSize','ram_size'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $validate = $request->validate([
            'product_id' => 'required|exists:products,id',
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
            'ram_size_id' => 'required|exists:ram_sizes,id',
        ]);
        Product::query()->create([
            'product_id' => $validate['product_id'],
            'color_id' => $validate['color_id'],
            'size_id' => $validate['size_id'],
            'ram_size_id' => $validate['ram_size_id'],
        ]);
        return redirect()->route('thuoctinh.list');
    }
}
