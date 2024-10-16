<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Admin\Controller;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
        public function index(){
            $productVariants = ProductVariant::all();
            return response()->json($productVariants);
        }

        public function store(Request $request){
            $data = ProductVariant::query()->create([
                'product_id' => $request['product_id'],
                'color_id' => $request['color_id'],
                'size_id' => $request['size_id'],
                'ram_size_id' => $request['ram_size_id'],
            ]);
            return response()->json([
                'data' => $data,
                'message' => 'Product variant added successfully!'
            ]);
        }

        public function update(Request $request, $id){
            $productVariant = ProductVariant::query()->find($id);
            $productVariant->update([
                'product_id' => $request['product_id'],
                'color_id' => $request['color_id'],
                'size_id' => $request['size_id'],
                'ram_size_id' => $request['ram_size_id'],
            ]);
            return response()->json([
                'data' => $productVariant,
                'message' => 'Product variant updated successfully!'
            ]);
        }

        public function destroy($id){
            $productVariant = ProductVariant::query()->find($id);
            $productVariant->delete();
            return response()->json([
                'message' => 'Product variant deleted successfully!'
            ]);
        }
}
