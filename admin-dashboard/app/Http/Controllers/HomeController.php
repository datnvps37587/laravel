<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Nếu chưa đăng nhập, chuyển hướng về trang login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập trước!');
        }

        return view('home'); // Nếu đã đăng nhập, hiển thị trang home
    }
}
