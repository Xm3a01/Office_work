<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrowseController extends Controller
{
    public function index()
    {
        return view('dashboard.admins.profile.whychooseUs');
    }

    public function indexUsers()
    {
        return view('dashboard.admins.users.about-company');
    }

    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function add_index($id)
    {
        $owner = "";
        
        if(Owner::findOrfail($id)) {

            $owner = Owner::findOrfail($id);
        } else {
            return "يجب اضافة صاحب عمل";
        }

        $roles = Role::all();
        $secials = Special::all();
        $subspecials = SubSpecial::all();

        return view('dashboard.admins.owners.addNewJob',compact(['owner','secials','subspecials','roles']));
    }

    public function job_index()
    {
        return view('dashboard.admins.owners.jobs');
    }

    public function role_index()
    {
        return "hello";
    }

    public function status_index()
    {
        return view('dashboard.admins.owners.jobType');
    }

    public function level_index()
    {
        return view('dashboard.admins.owners.jobLevel');
    }

    public function owner_create()
    {
        $roles = Role::all();
        $cities = City::all();
        $countries = Country::all();

        return view('dashboard.admins.owners.AddNewOwner', compact(['roles' , 'cities','countries']));
    }

    public function owner_index()
    {
        $owners = Owner::all();
        return view('dashboard.admins.owners.index', compact('owners'));
    }
}
