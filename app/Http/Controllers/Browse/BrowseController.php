<?php

namespace App\Http\Controllers\Browse;

use App\City;
use App\User;
use App\Owner;
use App\Country;
use App\Special;
use App\SubSpecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BrowseController extends Controller
{
    public function home_page()
    {
        $countries = Country::all();
        $sub_specials = SubSpecial::all();
        $owners = Owner::all();
        $countries->load('cities');

        return view('pages.home',compact(['countries','sub_specials','owners']));
    }

    public function myCv()
    {
        if(Auth::guard('web')->check()) {
        $user = User::findOrFail(Auth::user()->id);
        $cities = City::all();
        $specials = Special::all();
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
