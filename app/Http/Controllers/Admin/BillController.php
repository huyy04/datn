<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Models\Bill;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bill = Bill::query()->with(['user','addresses', 'paymentMethod'])->paginate(4);
        return view('admin.bill.list', compact('bill'));
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bill = Bill::with([ 'user', 'addresses', 'paymentMethod'])->findOrFail($id);
        return view('admin.bill.show', compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bill = DB::table('bills')->where('id', $id)->first();
        return view('admin.bill.edit', compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Tìm bill theo ID
        $bill = Bill::findOrFail($id);

        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'status' => 'required|in:đang chờ xử lý,đang giao,đã giao,đã hủy', // Các giá trị hợp lệ cho cột status
        ]);

        // Cập nhật bill với dữ liệu đã xác thực
        $bill->update($validatedData);

        return redirect()->route('bill.list');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Bill::findOrFail($id);
        $category->delete(); // Thực hiện soft delete
        return back();
    }
}
