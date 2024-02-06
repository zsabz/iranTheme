<?php

namespace Admin\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = 'ad/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        // dd(auth()->guard('admin')->check());
        // return view('views::products/addProduct');
        return view('views::auth.login');
    }
    public function showregister()
    {
        return view('views::auth.register');
    }

    // public function guard()
    // {
    //     return auth()->guard('admin');
    // }
    public function login(Request $request)
    {
        //    dd($request->all());
        // dd(bcrypt('a36639915io'));
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd(123);
        // dd(bcrypt($request->password));
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd('66');
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect(route('HomeController'));
            }

            return redirect()->to('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
