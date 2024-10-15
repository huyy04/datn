<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Admin\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = Category::all();
        return response()->json($objCategory);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $data = Category::query()->create([
            'name' => $validate['name'],
        ]);
        return response()->json([
            'data' => $data,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $cateId = Category::query()->find($id);
        $validate = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $cateId->update([
            'name' => $validate['name'],
        ]);
        return response()->json([
            'data' => $cateId,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cateId = Category::query()->find($id);
        $cateId->delete();
        return response()->json(['success' => 'delete success']);
    }
}
