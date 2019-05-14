<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SiswaLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:siswa')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.siswa-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'  => 'required|email',
            'password' => 'required|min:6'
        ]);

       if (Auth::guard('siswa')->attempt(['email' => $request->email, 'password' =>$request->password], $request->remember)) {
        return redirect()->intended(route('siswa.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard('siswa')->logout();
        return redirect('/');
    }
}
