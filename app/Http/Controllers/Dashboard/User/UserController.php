<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Job;
use App\City;
use App\User;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }

    public function index()
    {

        $user = User::findOrFail(Auth::user()->id);
        $jobs = Job::where('role', $user->role)->orWhere('country',$user->country)->get();

        if($user->visit_count == 1) {
           return view('dashboard.users.add_new_cv',compact(['user']));
        } else {
            return view('dashboard.users.account_result',compact('jobs'));
        }
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
       return $request->user_id;
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        return  $request->brith_country;
        $request->validate([
            'social_status' => 'required',
            'religion' => 'required',
            'gender' => 'required'

        ]);
        $social_status = [
            'Married' => 'متزوج',
            'Single' => 'اعزب',
        ];  
        
        $religion = [
            'Muslime' => 'مسلم',
            'Christian' => 'مسيحي',
            'Gushin' => 'يهودي',
            'Other' => 'اخرى'
        ];
        $gender = [
            'Male' => 'ذكر',
            'Female' => 'انثى'
        ];

        $user = User::findOrFail($request->user_id);
        if($request->has('email') && $request->has('phone')) {
        $user->email = $request->email;
        $user->phone = $request->phone;
        }

        $user->gender = $request->gender;
        $user->ar_gender = $gender[$request->gender];
        $user->name = $request->name;
        $user->ar_name = $request->ar_name;
        $user->religion = $request->religion;
        $user->ar_religion = $religion[$request->religion];
        $user->social_status = $request->social_status;
        $user->ar_social_status = $social_status[$request->social_status];

        if(app()->getLocale() == 'ar') 
        { 
            if($request->city){
            $city = City::where('ar_name' , $request->city)->first();
            $user->ar_city = $city->ar_name;
            $user->city = $city->name;
            }
            if($request->brith_country) {
            $country = Country::where('ar_name' , $request->brith_country)->first();
            $user->ar_country = $country->ar_name;
            $user->country = $country->name;
            }

        } else {
            if($request->city){
            $city = City::where('name' , $request->city)->first();
            $user->ar_city = $city->ar_name;
            $user->city = $city->name;
            }
            if($request->brith_country) {
            $country = Country::where('name' , $request->brith_country)->first();
            $user->ar_country = $country->ar_name;
            $user->country = $country->name;
            }
        }
        $user->save();

    }

    public function destroy($id)
    {
        //
    }
}
