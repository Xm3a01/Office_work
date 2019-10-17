<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\City;
use App\Role;
use App\User;
use App\Level;
use App\Country;
use App\Language;
use App\Education;
use App\SubSpecial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $levels = Level::all();
        return view('dashboard.admins.users.index',compact(['roles' , 'cities','countries', 'users', 'sub_specials', 'levels']));
    }

    public function index_edu()
    {
        $educations = Education::all();
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        $levels = Level::all();
        return view('dashboard.admins.users.education',compact(['educations','roles' , 'cities','countries', 'sub_specials', 'levels']));
    }


    public function index_lang()
    {
        
        $languages =Language::all();
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        $levels = Level::all();
        return view('dashboard.admins.users.language',compact(['languages','roles' , 'cities','countries', 'sub_specials', 'levels']));
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
        
        if($request->select == "lang") {

            $language = [
                'Arabic' => 'العربيه',
                'English' => 'الانجليزيه',
            ];
    
            $language_level = [
                'Beginner' => 'مبتدئي',
                'Intermediate' => 'متوسط',
                'Mother tounge' => 'اللغه الاساسيه',
            ];

            $lang = new Language();
            $lang->user_id = $request->select_form;
            $lang->ar_language =$language[$request->language];
            $lang->ar_language_level = $language_level[$request->language_level];
            $lang->language = $request->language;
            $lang->language_level = $request->language_level;
            if($lang->save()) {
                \Session::flash('success', 'تمت الاضافه بنجاح');
                return Redirect()->route('cv.index');
            }
        }

        $request->validate([
            'special_id' =>'required',
            ]);
        $sub_special = SubSpecial::findOrFail($request->special_id);
        
        if($request->select == "edu") {
        $education =new Education();
        $education->user_id = $request->select_form;
        $education->qualification = $request->qualification;
        $education->ar_qualification = $qualification[$request->qualification];
        $education->grade_date = $request->grade_date;
        $education->grade = $request->grade;
        $education->ar_university = $request->ar_university;
        $education->ar_university = $request->university;
        $education->university = $request->university;
        if($education->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return Redirect()->route('educations.index',app()->getLocale());
        }
        }

        if($request->select_user) {
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

        $user = new User();
        $country = Country::findOrFail($request->country_id);
        $city = City::findOrFail($request->city_id);
        $birth = City::findOrFail($request->birth_id);
        $role = Role::findOrFail($request->role_id);
        $user->ar_name = $request->ar_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->ar_city = $city->ar_name;
        $user->city = $city->name;
        $user->ar_country = $country->ar_name;
        $user->country = $country->name;
        $user->brith = $birth->name;
        $user->ar_brith = $birth->ar_name;
        $user->ar_role = $role->ar_name;
        $user->role = $role->name;
        $user->ar_sub_special = $sub_special->ar_name;
        $user->sub_special = $sub_special->name;
        $user->ar_religion = $religion[$request->religion];
        $user->religion = $request->religion;
        $user->social_status = $request->social_status;
        $user->ar_social_status = $social_status[$request->social_status];
        $user->idint_1 = $request->idint_1;
        $user->idint_2 = $request->idint_2;
        $user->birthdate = $request->birthdate;

        if($user->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return Redirect()->route('cv.index' ,app()->getLocale());
        }
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

    public function edu_edit($id)
    {
        $education = Education::findOrFail($id);
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        return view('dashboard.admins.users.edit_edu', compact(['education','roles' , 'cities','countries', 'user', 'sub_specials']));
    }

    public function lang_edit($id)
    {
        $language = Language::findOrFail($id);
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        return view('dashboard.admins.users.edit_lang', compact(['language','roles' , 'cities','countries', 'user', 'sub_specials']));
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
   
           if($request->select == "lang") {
            $language = Language::findOrFail($id);
            $lang->ar_language =$language[$request->language];
            $lang->ar_language_level = $language_level[$request->language_level];
            $lang->language = $request->language;
            $lang->language_level = $request->language_level;
            if($lang->save()) {
                \Session::flash('success', 'تمت الاضافه بنجاح');
                return Redirect()->route('language.index');
            }
        }

        $request->validate([
            'special_id' =>'required',
            ]);
        $sub_special = SubSpecial::findOrFail($request->special_id);
        
        if($request->select == "edu") {
        $education = Education::findOrFail($id);
        $education->qualification = $request->qualification;
        $education->ar_qualification = $qualification[$request->qualification];
        $education->grade_date = $request->grade_date;
        $education->grade = $request->grade;
        $education->ar_university = $request->university;
        $education->university = $request->university;
        if($education->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return Redirect()->route('education.index');
        }
        }

        if($request->select_user) {
        $request->validate([
            'ar_name' =>'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'country_id' => 'required',
            'city_id' =>'required',
            'birth_id' =>'required',
            'special_id' =>'required',
            'role' =>'required',
           ]);

        $user =  User::findOrFail($id);
        $country = Country::findOrFail($request->country_id);
        $city = City::findOrFail($request->city_id);
        $birth = City::findOrFail($request->birth_id);
        $role = Role::findOrFail($request->role_id);
        $user->ar_name = $request->ar_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->ar_city = $city->ar_name;
        $user->city = $city->name;
        $user->ar_country = $country->ar_name;
        $user->country = $country->name;
        $user->brith = $birth->name;
        $user->ar_brith = $birth->ar_name;
        $user->ar_sub_special = $sub_special->ar_name;
        $user->sub_special = $sub_special->name;
        $user->ar_role = $role->ar_name;
        $user->role = $role->name;
        $user->ar_religion = $religion[$request->religion];
        $user->religion = $request->religion;
        $user->social_status = $request->social_status;
        $user->ar_social_status = $social_status[$request->social_status];
        $user->idint_1 = $request->idint_1;
        $user->idint_2 = $request->idint_2;
        $user->birthdate = $request->birthdate;

        if($user->save()) {
            \Session::flash('success', 'تمت الاضافه بنجاح');
            return Redirect()->route('cv.index' ,app()->getLocale());
        }
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->select == "delete"){
            $education = Education::findOrFail($id);
            $education->delete();
            \Session::flash('success' , 'تم الحذف');
            return Redirect()->route('education.index');
        }

        if($request->select == "lang-delete"){
            $language = Language::findOrFail($id);
            $language->delete();
            \Session::flash('success' , 'تم الحذف');
            return Redirect()->route('language.index');
        }

        $user = User::findOrFail($id);
        $user->delete();

        \Session::flash('success', 'تم الحذف  بنجاح');
        return Redirect()->route('cv.index');

    }
}
