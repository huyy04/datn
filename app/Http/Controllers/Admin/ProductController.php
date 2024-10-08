<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

//use App\Models\Color;
//use App\Models\ProductVariant;
//use App\Models\RamSize;
//use App\Models\Size;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->with('category')->paginate(5);
        return view('admin.sanpham.list', compact('products'));
    }

    public function search(Request $request)
    {
        // lay tu khoa tim kiem
        $query = $request->input('search');
        // tim kie trong bang
        $search = Product::query()->where('name', 'LIKE', "%{$query}%")->get();
        // tra ve ket qua tim kiem
        return view('admin.sanpham.search', compact('search', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // lay danh sach color , ram , size
//        $color = Color::all();
//        $size = Size::all();
//        $size_ram = RamSize::all();
        $brand = Brand::all();
        $category = Category::all();
        return view('admin.sanpham.create', compact('brand', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        // kiem tra xem co file nao duoc tai len khong
        if ($request->hasFile('image')) {
            // lay file tu request
            $file = $request->file('image');
            // kiem tra xem file co hop le khong
            if ($file->isValid()) {
                // Tạo tên mới cho file (ví dụ: timestamp + tên gốc)
                $fileName = time() .'_'. $file->getClientOriginalName();
                // Đường dẫn lưu file (public folder)
                $path = $file->storeAs('products', $fileName, 'public');
            }
        }
        $validate = $request->validate([
            'name' => 'required|unique:products|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'ton_kho' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
        ]);
        // luu san pham chinh
        Product::query()->create([
            'name' => $validate['name'],
            'image' => $path,
            'description' => $validate['description'],
            'price' => $validate['price'],
            'ton_kho' => $validate['ton_kho'],
            'brand_id' => $validate['brand_id'],
            'category_id' => $validate['category_id'],
        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productId = Product::query()->find($id);
        return view('admin.sanpham.show', compact('productId'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
