<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\City;
use App\Role;
use App\User;
use App\Country;
use App\SubSpecial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        return view('dashboard.admins.users.index',compact(['roles' , 'cities','countries', 'users', 'sub_specials']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         'ar_name' =>'required',
         'email' => 'required|email|unique:users',
         'phone' => 'required',
         'password' => 'required',
         'country_id' => 'required',
         'city_id' =>'required',
         'birth_id' =>'required',
         'special_id' =>'required',
        ]);
        $language = [
            'Arabic' => 'العربيه',
            'English' => 'الانجليزيه',
        ];

        $language_level = [
            'Beginner' => 'مبتدئي',
            'Intermediate' => 'متوسط',
            'Mother tounge' => 'اللغه الاساسيه',
        ];

        $qualification = [
           'Diploma' => 'دبلوم',
           'Bachelor' => 'بكلاريوس',
           'Master' => 'ماجستير',
           'PH' => 'دكتوراة',
        ];
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

        $user = new User();
        $country = Country::findOrFail($request->country_id);
        $city = City::findOrFail($request->city_id);
        $birth = City::findOrFail($request->birth_id);
        $sub_special = SubSpecial::findOrFail($request->special_id);

        $user->ar_name = $request->ar_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->ar_city = $city->ar_name;
        $user->city = $city->name;
        $user->ar_country = $country->ar_name;
        $user->country = $country->name;
        $user->ar_university = $request->ar_university;
        $user->university = $request->university;
        $user->grade_date = $request->grade_date;
        $user->ar_brith = $request->ar_brith;
        $user->ar_brith = $request->ar_brith;
        $user->ar_sub_special = $sub_special->ar_nwme;
        $user->sub_special = $sub_special->nwme;
        $user->ar_religion = $religion[$request->religion];
        $user->religion = $request->religion;
        $user->ar_social_status = $request->email;
        $user->ar_social_status = $social_status[$request->social_status];
        $user->social_status = $request->social_status;
        $user->ar_qualification = $qualification[$request->qualification];
        $user->qualification = $request->qualification;
        $user->ar_language_level = $language_level[$request->language_level];
        $user->language_level = $request->language_level;
        $user->ar_language = $language[$request->language];
        $user->language = $request->language;
        $user->idint_1 = $request->idint_1;
        $user->idint_2 = $request->idint_2;
        $user->birthdate = $request->birthdate;
        $user->grade = $request->grade;
        $user->grade_date = $request->grade_date;
        $user->email = $request->email;
        $user->email = $request->email;
        if($user->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return Redirect()->route('users.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        return view('dashboard.admins.users.edit', compact(['roles' , 'cities','countries', 'user', 'sub_specials']));
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
            'ar_name' =>'required',
            'email' => 'required|email|',
            'phone' => 'required',
            'country_id' => 'required',
            'city_id' =>'required',
            'birth_id' =>'required',
            'special_id' =>'required',
           ]);
           $language = [
               'Arabic' => 'العربيه',
               'English' => 'الانجليزيه',
           ];
   
           $language_level = [
               'Beginner' => 'مبتدئي',
               'Intermediate' => 'متوسط',
               'Mother tounge' => 'اللغه الاساسيه',
           ];
   
           $qualification = [
              'Diploma' => 'دبلوم',
              'Bachelor' => 'بكلاريوس',
              'Master' => 'ماجستير',
              'PH' => 'دكتوراة',
           ];
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
   
           $user = User::findOrFail($id);
           $country = Country::findOrFail($request->country_id);
           $city = City::findOrFail($request->city_id);
           $birth = City::findOrFail($request->birth_id);
           $sub_special = SubSpecial::findOrFail($request->special_id);
   
           $user->ar_name = $request->ar_name;
           $user->name = $request->name;
           $user->email = $request->email;
           $user->phone = $request->phone;
           $user->ar_city = $city->ar_name;
           $user->city = $city->name;
           $user->ar_country = $country->ar_name;
           $user->country = $country->name;
           $user->ar_university = $request->ar_university;
           $user->university = $request->university;
           $user->grade_date = $request->grade_date;
           $user->ar_brith = $request->ar_brith;
           $user->ar_brith = $request->ar_brith;
           $user->ar_sub_special = $sub_special->ar_nwme;
           $user->sub_special = $sub_special->nwme;
           $user->ar_religion = $religion[$request->religion];
           $user->religion = $request->religion;
           $user->ar_social_status = $request->email;
           $user->ar_social_status = $social_status[$request->social_status];
           $user->social_status = $request->social_status;
           $user->ar_qualification = $qualification[$request->qualification];
           $user->qualification = $request->qualification;
           $user->ar_language_level = $language_level[$request->language_level];
           $user->language_level = $request->language_level;
           $user->ar_language = $language[$request->language];
           $user->language = $request->language;
           $user->idint_1 = $request->idint_1;
           $user->idint_2 = $request->idint_2;
           $user->birthdate = $request->birthdate;
           $user->grade = $request->grade;
           $user->grade_date = $request->grade_date;
           $user->email = $request->email;
           $user->email = $request->email;

           if($request->has('passowrd')) {
            $user->password = Hash::make($request->password);
            }

           if($user->save()) {
               \Session::flash('success', 'تم التعديل  بنجاح');
               return Redirect()->route('users.index');
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
        $user = User::findOrFail($id);
        $user->delete();

        \Session::flash('success', 'تم الحذف  بنجاح');
        return Redirect()->route('users.index');

    }
}
