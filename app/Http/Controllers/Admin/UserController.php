<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User  = User::query()->paginate(4);
        return view('admin.user.list', compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'nullable|min:10|max:15',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone' => 'nullable|min:9|max:15',
            'role' => 'required|in:1,2',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => $request->role,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        return redirect()->route('user.list');
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
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userId = User::findOrFail($id);

        try {
            $request->validate([
                'name' => 'required',
                'email' => ['required', 'email', Rule::unique('users')->ignore($userId->id)],
                'password' => 'nullable|min:6',
                'phone' => 'nullable|min:10|max:15',
                'role' => 'required|in:1,2',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Trả về view kèm theo lỗi validation nếu có
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        // Cập nhật thông tin người dùng trực tiếp từ request
        $userId->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'role' => $request->input('role'),
        ]);

        // Cập nhật mật khẩu nếu có
        if ($request->filled('password')) {
            $userId->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }

        return redirect()->route('user.list');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::withTrashed()->findOrFail($id);
        \Log::info('User to delete:', [$user]);
        $user->forceDelete();
        return back()->with('success', 'Người dùng đã được xóa thành công!');
    }
}
