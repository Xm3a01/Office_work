<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Exp;
use App\Job;
use App\City;
use App\Role;
use App\User;
use App\Level;
use App\Country;
use App\SubSpecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public $social_status = [
        'Married' => 'متزوج',
        'Single' => 'اعزب',
    ];  
    
    public $religion = [
        'Muslime' => 'مسلم',
        'Christian' => 'مسيحي',
        'Gushin' => 'يهودي',
        'Other' => 'اخرى'
    ];
    public $gender = [
        'Male' => 'ذكر',
        'Female' => 'انثى'
    ];

    public $qualification = [
        'Diploma' => 'دبلوم',
        'Bachelor' => 'بكلاريوس',
        'Master' => 'ماجستير',
        'PH' => 'دكتوراة',
     ];

     public $language = [
        'Arabic' => 'العربيه',
        'English' => 'الانجليزيه',
    ];


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

    public function myCv()
    {
        if(Auth::guard('web')->check()) {
        $user = User::findOrFail(Auth::user()->id);
        $cities = City::all();
        $sub_specials = SubSpecial::all();
        $levels = Level::all();
        $roles = Role::all();
        $count =  $this->pcount('users' ,'User', $user->id);
        $countries = Country::all();
        return view('dashboard.users.my_cv' , compact(['user','count' , 'cities','countries','sub_specials','levels','roles']));
        } else {
            return redirect()->route('login' ,app()->getLocale());
        }
    }

    public function store(Request $request)
    {
            $request->validate([
                'role' => 'required',
                'expertspecial' => 'required',
                'level' => 'required',
                'cert_pdf' => 'required',
                'expert_year' => 'required',
                'start_year' => 'required',
                'start_month' => 'required',
                'end_year' => 'required',
                'end_month' => 'required',
                ''
            ]);

         $expert = new Exp();

         $expert->user_id = Auth::user()->id;
         if($request->has('cert_pdf')) {
            $expert->expert_pdf = $request->cert_pdf->store('public/certificate');
        }
        if($request->has('expert_year')) {
            $expert->expert_year = $request->expert_year;
        }
        if($request->has('summary') || $request->has('summary')) {
            $expert->summary = $request->summary;
            $expert->ar_summary = $request->ar_summary;
        }
        if($request->has('start_year')){
            $expert->start_year = $request->start_year;
        }
        if($request->has('start_month')){
            $expert->start_month = $request->start_month;
        }
        if($request->has('end_year')){
            $expert->end_year = $request->end_year;
        }
        if($request->has('end_month')){
            $expert->end_month = $request->end_month;
        }

      if(app()->getLocale() == 'ar') {

        if($request->has('role')) {
            $role = Role::where('ar_name', $request->role)->first();
            if($role) {
                $expert->ar_role = $role->ar_name;
                $expert->role = $role->name;
            } else {
                $expert->ar_role = $request->name;
                $expert->role = $request->name;
            }
        }

        if($request->has('expertspecial')) {
            $special = SubSpecial::where('ar_name' , $request->expertspecial)->first();
            if($special){
                $expert->ar_sub_special = $special->ar_name;
                $expert->sub_special = $special->name;
            } else {
                $expert->ar_sub_special = $request->expertspecial;
                $expert->sub_special = $request->expertspecial;
            }
        }

        if($request->has('level')){
            $level = Level::where('ar_name' , $request->level)->first();
            if($level) {
                $expert->ar_level = $level->ar_name;
                $expert->level = $level->name;
            } else {
               $expert->ar_level = $request->level;
               $expert->level = $request->level;
            }
        }

    } else {//Localization 

        if($request->has('expertspecial')) {
            $special = SubSpecial::where('ar_name' , $request->expertspecial)->first();
            if($special){
                $expert->ar_sub_special = $special->ar_name;
                $expert->sub_special = $special->name;
            } else {
                $expert->ar_sub_special = $request->expertspecial;
                $expert->sub_special = $request->expertspecial;
            }
        }

        if($request->has('role')) {
            $role = Role::where('name', $request->role)->first();
            if($role) {
                $expert->ar_role = $role->ar_name;
                $expert->role = $role->name;
            } else {
                $expert->ar_role = $request->name;
                $expert->role = $request->name;
            }
        }

        if($request->has('level')){
            $level = Level::where('name' , $request->level)->first();
            if($level) {
                $expert->ar_level = $level->ar_name;
                $expert->level = $level->name;
            } else {
               $expert->ar_level = $request->level;
               $expert->level = $request->level;
            }
        }

    }
    $expert->save();

    return redirect()->route('web.mycv',app()->getLocale());

    }
   
    public function edit(Request $request)
    {
        return view('dashboard.users.account_setting');

        $user = User::findOrFail($request->segment(3));

        if($request->has('email')) {
            $user->email = $request->email;
        }
        if($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
       return redirect()->route('users.index');
    }

   
    public function update(Request $request, $id)
    {
        // return $request->role;

     $user = User::findOrFail($request->user_id);

    if($request->has('expert_form')) {
            $request->validate([
                'role' => 'required',
                'expertspecial' => 'required',
                'level' => 'required',
                'cert_pdf' => 'required',
                'expert_year' => 'required',
                'start_year' => 'required',
                'start_month' => 'required',
                'end_year' => 'required',
                'end_month' => 'required',
                ''
            ]);
     $expert = Exp::where('user_id',$request->user_id)->first();
     if($expert){
                 //Start experinece
        if($request->has('cert_pdf')) {
            $expert->expert_pdf = $request->cert_pdf->store('public/certificate');
        }
        if($request->has('expert_year')) {
            $expert->expert_year = $request->expert_year;
        }
        if($request->has('summary') || $request->has('summary')) {
            $expert->summary = $request->summary;
            $expert->ar_summary = $request->ar_summary;
        }
        if($request->has('start_year')){
            $expert->start_year = $request->start_year;
        }
        if($request->has('start_month')){
            $expert->start_month = $request->start_month;
        }
        if($request->has('end_year')){
            $expert->end_year = $request->end_year;
        }
        if($request->has('end_month')){
            $expert->end_month = $request->end_month;
        }
        if(app()->getLocale() == 'ar') {

            if($request->has('role')) {
                $role = Role::where('ar_name', $request->role)->first();
                if($role) {
                    $expert->ar_role = $role->ar_name;
                    $expert->role = $role->name;
                } else {
                    $expert->ar_role = $request->name;
                    $expert->role = $request->name;
                }
            }

            if($request->has('expertspecial')) {
                $special = SubSpecial::where('ar_name' , $request->expertspecial)->first();
                if($special){
                    $expert->ar_sub_special = $special->ar_name;
                    $expert->sub_special = $special->name;
                } else {
                    $expert->ar_sub_special = $request->expertspecial;
                    $expert->sub_special = $request->expertspecial;
                }
            }

            if($request->has('level')){
                $level = Level::where('ar_name' , $request->level)->first();
                if($level) {
                    $expert->ar_level = $level->ar_name;
                    $expert->level = $level->name;
                } else {
                   $expert->ar_level = $request->level;
                   $expert->level = $request->level;
                }
            }

        } else {//Localization 

            if($request->has('expertspecial')) {
                $special = SubSpecial::where('ar_name' , $request->expertspecial)->first();
                if($special){
                    $expert->ar_sub_special = $special->ar_name;
                    $expert->sub_special = $special->name;
                } else {
                    $expert->ar_sub_special = $request->expertspecial;
                    $expert->sub_special = $request->expertspecial;
                }
            }

            if($request->has('role')) {
                $role = Role::where('name', $request->role)->first();
                if($role) {
                    $expert->ar_role = $role->ar_name;
                    $expert->role = $role->name;
                } else {
                    $expert->ar_role = $request->name;
                    $expert->role = $request->name;
                }
            }

            if($request->has('level')){
                $level = Level::where('name' , $request->level)->first();
                if($level) {
                    $expert->ar_level = $level->ar_name;
                    $expert->level = $level->name;
                } else {
                   $expert->ar_level = $request->level;
                   $expert->level = $request->level;
                }
            }

        }

        //end experince
     } else {

         $expert = new Exp();

         if($request->has('cert_pdf')) {
            $expert->expert_pdf = $request->cert_pdf->store('public/certificate');
        }
        if($request->has('expert_year')) {
            $expert->expert_year = $request->expert_year;
        }
        if($request->has('summary') || $request->has('summary')) {
            $expert->summary = $request->summary;
            $expert->ar_summary = $request->ar_summary;
        }
        if($request->has('start_year')){
            $expert->start_year = $request->start_year;
        }
        if($request->has('start_month')){
            $expert->start_month = $request->start_month;
        }
        if($request->has('end_year')){
            $expert->end_year = $request->end_year;
        }
        if($request->has('end_month')){
            $expert->end_month = $request->end_month;
        }

     }

     if(app()->getLocale() == 'ar') {

        if($request->has('role')) {
            $role = Role::where('ar_name', $request->role)->first();
            if($role) {
                $expert->ar_role = $role->ar_name;
                $expert->role = $role->name;
            } else {
                $expert->ar_role = $request->name;
                $expert->role = $request->name;
            }
        }

        if($request->has('expertspecial')) {
            $special = SubSpecial::where('ar_name' , $request->expertspecial)->first();
            if($special){
                $expert->ar_sub_special = $special->ar_name;
                $expert->sub_special = $special->name;
            } else {
                $expert->ar_sub_special = $request->expertspecial;
                $expert->sub_special = $request->expertspecial;
            }
        }

        if($request->has('level')){
            $level = Level::where('ar_name' , $request->level)->first();
            if($level) {
                $expert->ar_level = $level->ar_name;
                $expert->level = $level->name;
            } else {
               $expert->ar_level = $request->level;
               $expert->level = $request->level;
            }
        }

    } else {//Localization 

        if($request->has('expertspecial')) {
            $special = SubSpecial::where('ar_name' , $request->expertspecial)->first();
            if($special){
                $expert->ar_sub_special = $special->ar_name;
                $expert->sub_special = $special->name;
            } else {
                $expert->ar_sub_special = $request->expertspecial;
                $expert->sub_special = $request->expertspecial;
            }
        }

        if($request->has('role')) {
            $role = Role::where('name', $request->role)->first();
            if($role) {
                $expert->ar_role = $role->ar_name;
                $expert->role = $role->name;
            } else {
                $expert->ar_role = $request->name;
                $expert->role = $request->name;
            }
        }

        if($request->has('level')){
            $level = Level::where('name' , $request->level)->first();
            if($level) {
                $expert->ar_level = $level->ar_name;
                $expert->level = $level->name;
            } else {
               $expert->ar_level = $request->level;
               $expert->level = $request->level;
            }
        }

    }
    $expert->save();

    }
        

        //Personal info
        if($request->has('email')){
            $user->email = $request->email;
        }
        if($request->has('phone')) {
            $user->phone = $request->phone;
        }

        if($request->has('gender')) {
            $user->gender = $request->gender;
            $user->ar_gender = $this->gender[$request->gender];
        }
        if($request->has('name')) {
            $user->name = $request->name;
            $user->ar_name = $request->ar_name;
        }
        if($request->has('religion')) {
            $user->religion = $request->religion;
            $user->ar_religion = $this->religion[$request->religion];
        }
        if($request->has('social_status')) {
            $user->social_status = $request->social_status;
            $user->ar_social_status = $this->social_status[$request->social_status];
        }
        //Eduction info
        if($request->has('qualification') && $request->qualification !='') {
            $user->qualification = $request->qualification;
            $user->ar_qualification = $this->qualification[$request->qualification];
        } 
        if($request->has('university')) {
            $user->university = $request->university;
        }

        if($request->has('ar_university')) {
            $user->ar_university = $request->ar_university;
        }

        if($request->has('language')) {
            $user->language = $request->language;
            $user->ar_language = $this->qualification[$request->language];
        }

        if($request->has('grade_date')) {
            $user->grade_date = $request->grade_date;
        }

        if($request->has('grade')) {
            $user->grade = $request->grade;
        }

        if($request->has('brithDate')) {
            $user->birthdate = $request->brithDate;
        }

        if(app()->getLocale() == 'ar') 
        { 
            if($request->has('city')){
                $city = City::where('ar_name' , $request->city)->first();
                if($city) {
                    $user->ar_city = $city->ar_name;
                    $user->city = $city->name;
                } else {
                  $user->ar_city = $request->city;
                  $user->city = $request->city;
                }
            } else
            if($request->has('brith_country')) {
                $country = Country::where('ar_name' , $request->brith_country)->first();
                if($country) {
                    $user->ar_brith = $country->ar_name;
                    $user->brith = $country->name;
                } else {
                  $user->ar_brith = $request->brith_country;
                  $user->brith = $request->brith_country;
                }
            }

            if($request->has('country')) {
                $country = Country::where('name' , $request->country)->first();
                if($country) {
                    $user->ar_country = $country->ar_name;
                    $user->country = $country->name;
                } else {
                  $user->ar_country = $request->country;
                  $user->country = $request->country;
                }
            }

            if($request->has('identity')) {
                $country = Country::where('name' , $request->identity)->first();
                if($country) {
                    $user->ar_country = $country->ar_name;
                    $user->country = $country->name;
                } else {
                  $user->ar_country = $request->country;
                  $user->country = $request->country;
                }
            }

            if($request->has('subspecial')) {
                $special = SubSpecial::where('ar_name' , $request->subspecial)->first();
                if($special) {
                    $user->ar_sub_special = $special->ar_name;
                    $user->sub_special = $special->name;
                } else {
                    $user->ar_sub_special = $request->subspecial;
                    $user->sub_special = $request->subspecial;
                }
            }

        } else { // localication else

            if($request->has('city')){
                $city = City::where('name' , $request->city)->first();
                if($city) {
                    $user->ar_city = $city->ar_name;
                    $user->city = $city->name;
                } else {
                   $user->ar_city = $request->city;
                   $user->city = $request->city;
                }
            }

            if($request->has('brith_country')) {
                $country = Country::where('name' , $request->brith_country)->first();
                if($country) {
                    $user->ar_brith = $country->ar_name;
                    $user->brith = $country->name;
                } else {
                   $user->ar_brith = $request->brith_country;
                   $user->brith = $request->brith_country;
                }
            }

            if($request->has('country')) {
                $country = Country::where('name' , $request->country)->first();
                if($country) {
                    $user->ar_country = $country->ar_name;
                    $user->country = $country->name;
                } else {
                  $user->ar_country = $request->country;
                  $user->country = $request->country;
                }
            }

            if($request->has('subspecial')) {
                $special = SubSpecial::where('ar_name' , $request->subspecial)->first();
                if($special){
                    $user->ar_sub_special = $special->ar_name;
                    $user->sub_special = $special->name;
                } else {
                    $user->ar_sub_special = $request->subspecial;
                    $user->sub_special = $request->subspecial;
                }
            }
        }
        $user->save();
            return redirect()->route('web.mycv',app()->getLocale());

        


    }

    public function destroy($id)
    {
        //
    }

    //helper 

    public function pcount($table ,$model ,$resource)
    {
        $pos_info =  DB::select(DB::raw('SHOW COLUMNS FROM '.$table));
            $base_columns = count($pos_info);
            $not_null = 0;
            foreach ($pos_info as $col){
                $not_null += app('App\\'.$model)::selectRaw('SUM(CASE WHEN '.$col->Field.' IS NOT NULL THEN 1 ELSE 0 END) AS not_null')->where('id', '=', $resource)->first()->not_null;
            }
            return ($not_null/$base_columns)*100;
    }
}
