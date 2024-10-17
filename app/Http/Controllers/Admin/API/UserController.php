<?php

namespace App\Http\Controllers\Admin\API;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index(){
        $User = User::all();
        return response()->json($User);
    }

    public function store(Request $request)
    {


        $data = User::query()->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'role' => $request['role'],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        return response()->json([
            'data' => $data,
            'message' => 'them thanh cong'
        ]);

    }

    public function update(Request $request, string $id)
    {
        // Tìm user theo ID, nếu không có thì trả về lỗi 404
        $user = User::findOrFail($id);

        // Thực hiện validate dữ liệu từ request
        $validate = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|min:6',
            'phone' => 'nullable|min:10|max:15',
            'role' => 'required|in:1,2',
        ]);

        // Cập nhật thông tin người dùng
        $user->update([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'phone' => $validate['phone'],
            'role' => $validate['role'],
        ]);

        // Cập nhật mật khẩu nếu có trong request
        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($validate['password']),
            ]);
        }

        // Trả về phản hồi JSON
        return response()->json([
            'data' => $user,
            'message' => 'Cập nhật thành công'
        ]);
    }

    public function destroy($id)
    {
        $product = User::query()->find($id);
        $product->delete();
        return response()->json([
            'message' => 'xoa thanh cong'
        ]);
    }

}
