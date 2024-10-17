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
        $productVariants = ProductVariant::query()->with(['product','color','size','ram_size'])->paginate(4);
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
//        $validate = $request->validate([
//            'product_id' => '|exists:products,id',
//            'color_id' => '|exists:colors,id',
//            'size_id' => '|exists:sizes,id',
//            'ram_size_id' => '|exists:ram_sizes,id',
//        ]);
        ProductVariant::query()->create([
            'product_id' => $request['product_id'],
            'color_id' => $request['color_id'],
            'size_id' => $request['size_id'],
            'ram_size_id' => $request['ram_size_id'],
        ]);
        return redirect()->route('thuoc-tinh.index');
    }
}
