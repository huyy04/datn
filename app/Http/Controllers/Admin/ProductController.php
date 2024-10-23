<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $products = Product::query()->with('category')->paginate(4);
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
        $productId = Product::query()->with('variant')->find($id);
        return view('admin.sanpham.show', compact('productId'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productId = Product::query()->find($id);
        $brand = Brand::all();
        $category = Category::all();
        return view('admin.sanpham.edit', compact('productId', 'brand', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $productId = Product::query()->find($id);
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'ton_kho' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // xoa anh cu neu cap nhat
            if ($productId->image){
                $imageOld = public_path('products/'.$productId->image);
                if(file_exists($imageOld)){
                    unlink($imageOld);
                }
            }
            // cap nhat anh moi
            $file = $request->file('image');
            if ($file->isValid()) {
                $fileName = time() .'_'. $file->getClientOriginalName();
                $path = $file->storeAs('products', $fileName, 'public');
            }
        }else {
            // giu nguyen anh neu k cap nhat anh
            $path = $productId->image;
        }
        $productId->update([
            'name' => $request['name'],
            'image' => $path,
            'description' => $request['description'],
            'price' => $request['price'],
            'ton_kho' => $request['ton_kho'],
            'brand_id' => $request['brand_id'],
            'category_id' => $request['category_id'],
        ]);
        return redirect()->route('san-pham.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productId = Product::query()->find($id);
        $productId->delete();
        return redirect()->route('san-pham.index');
    }
}
