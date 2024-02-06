<?php

namespace Site\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Admin\Http\Controllers\Auth\LoginController as AdminLogin;

class LoginController extends AdminLogin
{
    // /*
    // |--------------------------------------------------------------------------
    // | Login Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles authenticating users for the application and
    // | redirecting them to your home screen. The controller uses a trait
    // | to conveniently provide its functionality to your applications.
    // |
    // */

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = 'ad/dashboard';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     // $this->middleware('guest')->except('logout');
    // }

    // public function showLoginForm()
    // {
    //     dd(321);
    //     // dd(auth()->guard('admin')->check());
    //     return view('auth.login');
    // }

    // // public function guard()
    // // {
    // //     return auth()->guard('admin');
    // // }
    // public function login(Request $request)
    // {
    //     // dd($request->all());
    //     // dd(bcrypt('a36639915io'));
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);



    //     // dd(123);

    //     // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {

    //         $request->session()->regenerate();
    //         //   dd(Auth::guard('admin')->check());   

    //         // dd(Auth::guard('admin')->user()->name);

    //         // return redirect()->intended('/ad/dashboard');
    //         return redirect('/ad/dashboard');
    //         // return redirect()->intended($this->redirectPath());


    //     }

    //     return back()->withErrors([
    //         // return redirect()->intended('ad/dashboard');
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }


}
