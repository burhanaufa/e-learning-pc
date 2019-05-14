<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class GuruLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:guru')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.guru-login');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'  => 'required|email',
            'password' => 'required|min:6'
        ]);

       if (Auth::guard('siswa')->attempt(['email' => $request->email, 'password' =>$request->password], $request->remember)) {
        return redirect()->intended(route('guru.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard('guru')->logout();
        return redirect('/');
    }
}
