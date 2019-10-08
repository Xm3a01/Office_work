<?php

namespace App\Http\Controllers;

use App\City;
use App\Role;
use App\Owner;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:owner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return "hello";
    }

    public function store(Request $request)
    {
        if($request->select == "owner")
        {
        $request->validate([
            'email' => 'required|email|unique:owners',
            'password' => 'required|min:8',
            'company_email' => 'required',
            'company_name' => 'required',
            'phone' => 'required',
            'logo'  =>  'required|image',
            'city_id' => 'required',
            'role_id' => 'required',
            'country_id' => 'required'
            ]);

            $gender = [
                'maile' => 'ذكر',
                'femaile' => 'انثى',
            ];

            $owner = new Owner();
            $role =Role::findOrFail($request->role_id);
            $city =City::findOrFail($request->city_id);
            $country =  Country::findOrFail($request->country_id);

            $owner->email = $request->email;
            $owner->phone = $request->phone;
            $owner->logo = $request->logo->store('public/company_logo');
            $owner->company_email = $request->company_email;
            $owner->company_name = $request->company_name;
            $owner->password = Hash::make($request->password);

            if(app()->getLocale() == "ar" || $request->label == "admin") {
            $request->validate([
             'ar_name' => 'required|max:255',
             'gender' => 'required',
            ]);


            $owner->ar_name = $request->ar_name;
            $owner->ar_role = $role->ar_name;
            $owner->role = $role->name;
            $owner->ar_country = $country->ar_name;
            $owner->country = $country->name;
            $owner->ar_city = $city->ar_name;
            $owner->city = $city->name;
            $owner->ar_gender = $gender[$request->gender];
            $owner->gender = $request->gender;
            $owner->ar_description = $request->ar_description;
            
        } elseif (app()->getLocale() == "en") {
            $request->validate([
                'name' => 'required|max:255',
                'gender' => 'required',
               ]);
   
   
               $owner->name = $request->name;
               $owner->role = $role->name;
               $owner->ar_role = $role->ar_name;
               $owner->country = $country->name;
               $owner->ar_country = $country->ar_name;
               $owner->city = $city->name;
               $owner->ar_city = $city->ar_name;
               $owner->gender = $request->gender;
               $owner->ar_gender = $gender[$request->gender];
               $owner->description = $request->description;
            
        }

        if($owner->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return redirect()->route('owners.index');
        }
    } elseif ($request->select == "company") {
        
    }
    }
}
