<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            // Custom logic based on user type
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            } else if (auth()->user()->type == 'staff') {
                return redirect()->route('staff.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

    // Override the default logout method
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
