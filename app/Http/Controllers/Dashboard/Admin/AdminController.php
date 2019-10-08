<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\City;
use App\Role;
use App\User;
use App\Admin;
use App\Owner;
use App\Country;
use App\Special;
use App\SubSpecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $admins = Admin::all();
        return view('dashboard.admins.index',compact('admins'));
    }

    public function store(Request $request) 
    {
         $this->validate($request, [
          'name' => 'required|max:255',
          'email' => 'required|email',
          'phone' => 'required|max:20',
         ]);

         $admin = new Admin();

         $admin->name = $request->name;
         $admin->email = $request->email;

         if($request->has('password')) {
            $admin->password = Hash::make($request->password);
            }

         $admin->phone = $request->phone;

         if($admin->save()) {
             \Session::flash('success', 'Admin  '.$admin->name.'   add Successflly');
             return redirect()->route('admins.index');
         } else {
            \Session::flash('error', 'Admin not add Successflly');
            return redirect()->route('admins.index');
         }
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('dashboard.admins.edit',compact('admin'));
    }

    public function update(Request $request , $id) 
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:20',
           ]);
  
           $admin = Admin::findOrFail($id);
  
           $admin->name = $request->name;
           $admin->email = $request->email;
           if($request->has('password')) {
           $admin->password = Hash::make($request->password);
           }
           $admin->phone = $request->phone;
  
           if($admin->save()) {
               \Session::flash('success', 'Admin ' .$admin->name.'  add Successflly');
               return redirect()->route('admins.index');
           } else {
              \Session::flash('error', 'Admin not add Successflly');
              return redirect()->route('admins.index');
           }
    }

    public function destroy($id) 
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        \Session::flash('success', 'Admin '.$admin->name.' delete Successflly');
        return redirect()->route('admins.index');
    }

    
}
