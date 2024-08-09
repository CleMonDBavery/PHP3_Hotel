<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Xác thực người dùng
        $request->authenticate();

        // Tạo lại session để bảo vệ khỏi các cuộc tấn công session fixation
        $request->session()->regenerate();

        // Điều hướng người dùng dựa trên vai trò của họ
        $user = Auth::user();


        if ($user->role == '0') {
            return redirect()->route('home'); // Route chính xác cho trang client
        } elseif ($user->role == '1') {
            return redirect()->route('dashboard'); // Route chính xác cho trang admin
        }

        // Điều hướng đến trang mặc định nếu vai trò không khớp
        return redirect()->route('home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Đăng xuất người dùng
        Auth::guard('web')->logout();

        // Xóa session
        $request->session()->invalidate();

        // Tạo lại token session
        $request->session()->regenerateToken();

        // Điều hướng về trang chính
        return redirect('/login');
    }
}
