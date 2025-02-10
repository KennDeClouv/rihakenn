<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            return app(MainController::class)->index();
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'pin' => 'required|digits:4',
        ], [
            'pin.required' => 'PIN harus diisi.',
            'pin.digits' => 'PIN harus 4 digit.',
        ]);

        $pin = $request->pin;

        if ($pin == '2104') {
            session(['logged_in' => true]);
            return redirect()->route('index');
        }

        return back()->withErrors('PIN salah.');
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('/login');
    }
}
