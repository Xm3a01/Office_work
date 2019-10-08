<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\City;
use App\Role;
use App\Owner;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('dashboard.admins.owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();

        return view('dashboard.admins.owners.AddNewOwner', compact(['roles' , 'cities','countries']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'country_id' => 'required',
            'ar_name' => 'required|max:255',
             'gender' => 'required',
            ]);

            $gender = [
                'Maile' => 'ذكر',
                'Femaile' => 'انثى',
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

            if($owner->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return redirect()->route('owners.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();

        return view('dashboard.admins.owners.owner_edit',
                                      compact(['owner','roles' ,
                                           'cities','countries']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'company_email' => 'required',
            'company_name' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
            'role_id' => 'required',
            'country_id' => 'required',
            'ar_name' => 'required|max:255',
             'gender' => 'required',
            ]);

            $gender = [
                'Maile' => 'ذكر',
                'Femaile' => 'انثى',
            ];

            $owner =  Owner::findOrFail($id);
            $role =Role::findOrFail($request->role_id);
            $city =City::findOrFail($request->city_id);
            $country =  Country::findOrFail($request->country_id);

            $owner->email = $request->email;
            $owner->phone = $request->phone;
            $owner->company_email = $request->company_email;
            $owner->company_name = $request->company_name;
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

            if($request->has('password')) {
            $owner->password = Hash::make($request->password);
            }

            if($request->has('logo')) {
                \Storage::delete($owner->logo);
                $owner->logo = $request->logo->store('public/company_logo');
            }

            if($owner->save()) {
            \Session::flash('success', 'تم التعديل بنجاح');
            return redirect()->route('owners.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner =  Owner::findOrFail($id);
        \Storage::delete($owner->logo);
        $owner->delete();
        
        \Session::flash('success', 'تم الحذف بنجاح');
        return redirect()->route('owners.index');
    }
}
