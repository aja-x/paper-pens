<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
//        $this->middleware('guest:admin')->except('logout');
//        $this->middleware('guest:editor')->except('logout');
        $this->middleware('guest:dosen')->except('logout');
    }

    public function username()
    {
        return 'email_dosen';
    }

    public function showLoginForm()
    {
//        return view('admin.login');
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password_dosen');
    }

    public function logout()
    {
        Auth::logout('dosen');
        return redirect(url('/'));
    }
    protected function guard()
    {
        return Auth::guard('dosen');
    }
}
