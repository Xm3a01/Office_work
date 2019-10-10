<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

        public function redirectTo() {

            return '/dashboard';
        } 
    

    public function login(Request $request)
    {  
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $data =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($data , $request->remember)) {
            return \redirect()->intended(route('admin.dashboard'));
        } else {
            \Session::flash('error' , 'البريد او كلمة المرور غير صحيحه');
            return \redirect()->back()->withInput($request->only('email' , 'remember'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return  redirect('admins/login');
    }
}


