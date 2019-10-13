<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Registersuser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new user as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect user after registration.
     *
     * @var string
     */
    public function FunctiredirectTo()
    {
        return app()->getLocale().'/user';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $roles = Role::all();
        return view('auth.register',compact('roles'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data , $table)
    {

        return Validator::make($data, [
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.$table],
            'phone' => ['required'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(Request $request)
    {
        $this->validator($request->all(), 'users')->validate();
        if(app()->getLocale() == 'ar') {
            $role = Role::where('ar_name',$request->role)->first();
        } else {
            $role = Role::where('name',$request->role)->first();
        }

          $user = User::create([
            'ar_name' => $request->name,
            'name' => $request->name,
            'email' => $request->email,
            'visit_count' => 1,
            'phone' => $request->phone,
            'ar_role' => $role->ar_name,
            'role' => $role->name,
            'password' => Hash::make($request->password),            
        ]);
        
         Auth::guard('web')->login($user);
         return redirect()->route('users.index' , app()->getLocale());
    }
}
