<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ReCaptcha\ReCaptcha;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth/register');
    }

    public function register(AuthRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login');
    }

    public function showLoginForm()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['name', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'name' => 'Неверный логин или пароль',
        ]);

    }

    public function submit(Request $request)
    {
        $captcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));

        $response = $captcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$response->isSuccess()) {
            dd('nope');
        }

        dd('ok');
    }
}
