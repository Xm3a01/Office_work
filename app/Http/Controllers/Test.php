<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class Test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('test.add_field');
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


    public function select($id)
    {
        $country = Country::findOrfail($id);
        $country->load('cities');

        return response()->json($country->cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Country::create([
         'name'=> $request->name,
         'ar_name'=> $request->ar_name,
        ]);

        return 'data saved';
    }

    public function store2(Request $request)
    {
        City::create([
         'name'=> $request->name,
         'ar_name'=> $request->ar_name,
         'country_id' => $request->country
        ]);
        return "Data saved";
    }

    function testtow() {
        $countries = Country::all();
        $countries->load('cities');
        return view('test.add')->withCountries($countries);
    }

    function search() {
        $countries = Country::all();
        return response()->json($countries);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
