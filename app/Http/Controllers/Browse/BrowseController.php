<?php

namespace App\Http\Controllers\Browse;

use App\Job;
use App\City;
use App\Role;
use App\User;
use App\About;
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
        $roles = Role::latest()->take(10)->get();
        $roles->load('specials.sub_specials');
        $countries->load('cities');
        $jobs = Job::latest()->take(5)->get();
        $jobs->load('owner');

        return view('pages.home',compact(['countries','sub_specials','owners','roles','jobs']));
    }

    public function jobSingle(Request $request)
    {
        $job = Job::findOrFail($request->single);
        return view('pages.jobsingle' , compact('job'));

    }

    public function contact()
    {
        $about = About::latest()->take(1)->first();

        return view('pages.contact',compact('about'));
    }

    public function jobOwner()
    {
        $jobs = Job::all();
        $role = Role::all();
        $countries = Country::all();
        return view('pages.jobowner',compact(['countries' , 'role','jobs']));
    }

    public function about()
    {
        
    }

}
