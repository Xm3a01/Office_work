<?php

namespace App\Http\Controllers\Browse;

use App\Owner;
use App\Country;
use App\SubSpecial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
