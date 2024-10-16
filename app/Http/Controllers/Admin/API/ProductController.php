<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Admin\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
        public function index(){
            $products = Product::all();
            return response()->json($products);
        }
        public function store(Request $request)
        {
            $validate = $request->validate([
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required',
                'ton_kho' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'brand_id' => 'required',
            ]);
            // kiem tra xem co file nao dc tai len hay khong
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                // kiem tra xem file co hop le khong
                if ($image->isValid()) {
                    // tao ten moi cho file
                    $fileName = time() . '.' . $image->getClientOriginalExtension();
                    // tao duong dan luu file
                    $path = $image->storeAs('products', $fileName, 'public');
                }
            }
            $data = Product::query()->create([
                'name' => $validate['name'],
                'image' => $path,
                'price' => $validate['price'],
                'ton_kho' => $validate['ton_kho'],
                'description' => $validate['description'],
                'category_id' => $validate['category_id'],
                'brand_id' => $validate['brand_id'],
            ]);
            return response()->json([
                'data' => $data,
                'message' => 'them thanh cong'
            ]);
        }

        public function show($id){
            $product = Product::query()->find($id);
            return response()->json([
                'data' => $product,
                'message' => 'tim thay san pham'
            ]);
        }

    public function update(Request $request, string $id){
            $productId = Product::query()->find($id);
            $data = $productId->update([
                'name' => $request['name'],
                'price' => $request['price'],
                'ton_kho' => $request['ton_kho'],
                'description' => $request['description'],
                'category_id' => $request['category_id'],
                'brand_id' => $request['brand_id'],
            ]);
            return response()->json([
                'data' => $data,
                'message' => 'cap nhat thanh cong'
            ]);
    }

        public function destroy($id)
        {
            $product = Product::query()->find($id);
            $product->delete();
            return response()->json([
                'message' => 'xoa thanh cong'
            ]);
        }
}
