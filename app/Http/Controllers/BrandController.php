<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.list', compact('brands'));
    }

    public function search(Request $request)
    {
        // lay tu khoa tim kiem
        $query = $request->input('search');
        // tim kie trong bang
        $search = Brand::query()->where('name', 'LIKE', "%{$query}%")->get();
        // tra ve ket qua tim kiem
        return view('admin.brand.search', compact('search', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:brands|max:255|',
        ]);
        Brand::query()->create([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('brand.list');
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
        $brandId = Brand::query()->findOrFail($id);
        return view('admin.brand.edit', compact('brandId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brandId = Brand::query()->findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:brands|max:255|',
        ]);
        $brandId->update([
            'name' => $validatedData['name'],
        ]);
        return redirect()->route('brand.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brandId = Brand::query()->findOrFail($id);
        $brandId->delete();
        return redirect()->route('brand.list');
    }
}
