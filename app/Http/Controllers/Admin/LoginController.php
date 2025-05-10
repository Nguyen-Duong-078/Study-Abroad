<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email chưa nhập',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu chưa nhập',
        ]);
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)){



        return redirect()->route('schools.index')->with('success', 'Đăng nhập thành công');
        }

    return back()->with('error', 'Sai email hoặc mật khẩu');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout()
    {
        // Đăng xuất người dùng
        Auth::logout();

        // Xóa tất cả session của người dùng
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Chuyển hướng về trang login
        return redirect(route('auth.showLoginForm'));
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
