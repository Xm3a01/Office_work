<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Job;
use App\City;
use App\Role;
use App\Owner;
use App\Country;
use App\Special;
use App\SubSpecial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();

        return view('dashboard.admins.owners.jobs',compact('jobs'));
    }

    public function create($id)
    {
        $owner = "";
        
        if(Owner::findOrfail($id)) {

            $owner = Owner::findOrfail($id);
        } else {
            return "يجب اضافة صاحب عمل";
        }

        $roles = Role::all();
        $specials = Special::all();
        $sub_specials = SubSpecial::all();
        $countries = Country::all();
        $cities = City::all();

        return view('dashboard.admins.owners.addNewJob',
            compact(['owner','specials',
                'sub_specials','roles',
                     'countries', 'cities']));
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
            'owner_id' => 'required',
            'city_id' => 'required',
            'role_id' => 'required',
            'country_id' => 'required',
            'selary' => 'required|max:255',
            'special_id' => 'required',
            'sub_special_id' =>'required',
            'status' => 'required'
            ]);

            $status = [
                'Full time' => 'دوام كامل',
                'Part time' => 'دوام جزئي',
            ];
           
            $job = new Job();
            $owner = Owner::findOrFail($request->owner_id);
            $role =Role::findOrFail($request->role_id);
            $city =City::findOrFail($request->city_id);
            $country =  Country::findOrFail($request->country_id);
            $special =  Special::findOrFail($request->special_id);
            $sub_special =  SubSpecial::findOrFail($request->sub_special_id);

            // $job->company_name = $owner->company_name;
            $job->selary = $request->selary;
            // $job->owner_id = $request->owner_id;
            $job->ar_role = $role->ar_name;
            $job->role = $role->name;
            // $job->ar_country = $country->ar_name;
            // $job->country = $country->name;
            // $job->ar_city = $city->ar_name;
            // $job->city = $city->name;
            $job->yearsOfExper = $request->experinse;
            $job->ar_special = $special->ar_name;
            $job->special = $special->name;
            $job->ar_sub_special = $sub_special->ar_name;
            $job->sub_special = $special->name;
            $job->ar_status = $status[$request->status];
            $job->status = $request->status;
            $job->ar_description = $request->ar_description;
        
             if($job->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return redirect()->route('jobs.index');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);

        $roles = Role::all();
        $specials = Special::all();
        $sub_specials = SubSpecial::all();
        $countries = Country::all();
        $cities = City::all();

        return view('dashboard.admins.owners.job_edit',
            compact(['job','specials',
                'sub_specials','roles',
                     'countries', 'cities']));
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
            'city_id' => 'required',
            'role_id' => 'required',
            'country_id' => 'required',
            'selary' => 'required|max:255',
            'special_id' => 'required',
            'sub_special_id' =>'required',
            'status' => 'required'
            ]);

            $status = [
                'Full time' => 'دوام كامل',
                'Part time' => 'دوام جزئي',
            ];

            $job = Job::findOrFail($id);
            $role =Role::findOrFail($request->role_id);
            $city =City::findOrFail($request->city_id);
            $country =  Country::findOrFail($request->country_id);
            $special =  Special::findOrFail($request->special_id);
            $sub_special =  SubSpecial::findOrFail($request->sub_special_id);

            $job->selary = $request->selary;
            $job->ar_role = $role->ar_name;
            $job->role = $role->name;
            $job->ar_country = $country->ar_name;
            $job->country = $country->name;
            $job->ar_city = $city->ar_name;
            $job->city = $city->name;
            $job->yearsOfExper = $request->experinse;
            $job->ar_special = $special->ar_name;
            $job->special = $special->name;
            $job->ar_sub_special = $sub_special->ar_name;
            $job->sub_special = $special->name;
            $job->ar_status = $status[$request->status];
            $job->status = $request->status;
            $job->ar_description = $request->ar_description;
        
             if($job->save()) {
            \Session::flash('success', 'تم التعديل بنجاح');
            return redirect()->route('jobs.index');
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
        $job =  Job::findOrFail($id);
        $job->delete();
        
        \Session::flash('success', 'تم الحذف بنجاح');
        return redirect()->route('jobs.index');
    }
}
