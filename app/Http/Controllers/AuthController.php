<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthVerifyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function verify(UserAuthVerifyRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password'], 'level' => 'admin'])) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/home');
        } elseif (Auth::guard('user')->attempt(['email' => $data['email'], 'password' => $data['password'], 'level' => 'user'])) {
            $request->session()->regenerate();
            return redirect()->intended('/users/home');
        } else {
            return redirect(route('login'))->with('error', 'Invalid credentials');
        }
    }
    public function logout(): RedirectResponse
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        return redirect(route('login'));
    }
}