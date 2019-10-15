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

    public $language_level = [
        'Beginner' => 'مبتدئي',
        'Intermediate' => 'متوسط',
        'Mother tounge' => 'اللغه الاساسيه',
    ];


    public function __construct() {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $expert = '';

        $user = User::findOrFail(Auth::user()->id);
        $jobs = Job::where('role', $user->role)->orWhere('country',$user->country)->get();
        if($user->visit_count == 1) {
            $cities = City::all();
            $sub_specials = SubSpecial::all();
            $levels = Level::all();
            $roles = Role::all();
            $countries = Country::all();
           return view('dashboard.users.add_new_cv',compact(['user' , 'cities','countries','sub_specials','levels','roles']));
        } else {
            return view('dashboard.users.account_result',compact(['jobs','user']));
        }
    }

    public function myCv()
    {
        if(Auth::guard('web')->check()) {
        $user = User::findOrFail(Auth::user()->id);
        $expert = Exp::where('user_id', $user->id)->first();
        $cities = City::all();
        $sub_specials = SubSpecial::all();
        $levels = Level::all();
        $roles = Role::all();
        $countries = Country::all();
        $count =  $this->pcount('users' ,'User', $user->id);
        if(!is_null($expert)) {
        $expcount =  $this->pcount('exps' ,'Exp', $expert->id);
        $count = $count + $expcount - 79;
        }
        return view('dashboard.users.my_cv' , compact(['user','result', 'count' , 'cities','countries','sub_specials','levels','roles','expert']));
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
    if($expert->save()) {
        if(app()->getLocale() == 'ar') {
           \Session::flash('success' , 'تم الحفظ بنجاح');
        } else {
         \Session::flash('success' , ' Data saved successfully');
        }
        return redirect()->route('web.mycv',app()->getLocale());
     }


    }
   
    public function edit(Request $request)
    {
            $user = User::findOrFail($request->segment(3));
            return view('dashboard.users.account_setting', compact('user'));
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
     $expert = Exp::where('user_id',$request->segment(3))->first();
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

         $expert->user_id = $request->segment(3);
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
    if($expert->save()) {
       if(app()->getLocale() == 'ar') {
          \Session::flash('success' , 'تم الحفظ بنجاح');
       } else {
        \Session::flash('success' , ' Data saved successfully');
       }
    }

    }
        

        //Personal info
        if($request->has('email')){
            $user->email = $request->email;
        }

        if($request->has('password')){
            $request->validate([
                'password' => 'required|min:8|confirmed'
            ]);
            if($request->has('password')) {
                $user->password = Hash::make($request->password);
            }
          }

        if($request->has('phone')) {
            $user->phone = $request->phone;
        }
        if($request->has('avatar')) {
            $user->avatar = $request->avatar->store('public/avatar');
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

        if($request->has('language') && $request->language !='') {
            $user->language = $request->language;
            $user->ar_language = $this->language[$request->language];
        }

        if($request->has('language_level') && $request->language_level !='' ) {
            $user->language_level = $request->language_level;
            $user->ar_language_level = $this->language_level[$request->language_level];
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

        if($request->has('idint_1')) {
            $user->idint_1 = $request->idint_1;
        }

        if($request->has('idint_2')) {
            $user->idint_2 = $request->idint_2;
        }

        if($request->has('new_form')) {
            $user->visit_count +=1;
        }

        if(app()->getLocale() == 'ar') 
        { 
            if($request->has('city') && $request->city !=""){
                $city = City::where('ar_name' , $request->city)->first();
                if($city) {
                    $user->ar_city = $city->ar_name;
                    $user->city = $city->name;
                } else {
                  $user->ar_city = $request->city;
                  $user->city = $request->city;
                }
            } else
            if($request->has('brith_country') && $request->brith_country !="" ) {
                $country = Country::where('ar_name' , $request->brith_country)->first();
                if($country) {
                    $user->ar_brith = $country->ar_name;
                    $user->brith = $country->name;
                } else {
                  $user->ar_brith = $request->brith_country;
                  $user->brith = $request->brith_country;
                }
            }

            if($request->has('country') && $request->country !="") {
                $country = Country::where('name' , $request->country)->first();
                if($country) {
                    $user->ar_country = $country->ar_name;
                    $user->country = $country->name;
                } else {
                  $user->ar_country = $request->country;
                  $user->country = $request->country;
                }
            }

            if($request->has('identity') && $request->identity != "") {
                $country = Country::where('name' , $request->identity)->first();
                if($country) {
                    $user->ar_country = $country->ar_name;
                    $user->country = $country->name;
                } else {
                  $user->ar_country = $request->country;
                  $user->country = $request->country;
                }
            }

            if($request->has('subspecial') && $request->subspecial != "") {
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

            if($request->has('city') && $request->city !=""){
                $city = City::where('name' , $request->city)->first();
                if($city) {
                    $user->ar_city = $city->ar_name;
                    $user->city = $city->name;
                } else {
                   $user->ar_city = $request->city;
                   $user->city = $request->city;
                }
            }

            if($request->has('brith_country') && $request->brith_country !="" ) {
                $country = Country::where('name' , $request->brith_country)->first();
                if($country) {
                    $user->ar_brith = $country->ar_name;
                    $user->brith = $country->name;
                } else {
                   $user->ar_brith = $request->brith_country;
                   $user->brith = $request->brith_country;
                }
            }

            if($request->has('country') && $request->country !="" ) {
                $country = Country::where('name' , $request->country)->first();
                if($country) {
                    $user->ar_country = $country->ar_name;
                    $user->country = $country->name;
                } else {
                  $user->ar_country = $request->country;
                  $user->country = $request->country;
                }
            }

            if($request->has('subspecial') && $request->subspecial !="") {
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
        if($user->save()) {
            if(app()->getLocale() == 'ar') {
               \Session::flash('success' , 'تم الحفظ بنجاح');
            } else {
             \Session::flash('success' , ' Data saved successfully');
            }
         }
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
