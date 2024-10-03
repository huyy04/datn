<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('categories')->get();
        return view('admin.danhmuc.list', compact('data'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $search = Category::query()->where('name', 'like', "%{$query}%")->get();
        return view('admin.danhmuc.search', compact('search', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('categories')->insert([
            'name'=>$request ->name,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        return redirect()->route('danhmuc.list');
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
        $model = DB::table('categories')->where('id',$id)->first();
        return view('admin.danhmuc.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cateId = Category::query()->findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:brands|max:255|',
        ]);
        $cateId->update([
            'name' => $validatedData['name'],
        ]);
        return redirect()->route('danhmuc.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete(); // Thực hiện soft delete
        return back();
    }
}
