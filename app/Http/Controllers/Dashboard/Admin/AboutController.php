<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $all = About::all();

       return view('admin')->withAll($all);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dashboard.admins.profile.about-company');
    }

    public function createContact()
    {
       return view('dashboard.admins.profile.contactus');
    }

    public function createPartner()
    {
       return view('dashboard.admins.profile.partnersSuccess');
    }

    public function createTeam()
    {
       return view('dashboard.admins.profile.team');
    }

    public function createwhyUs()
    {
       return view('dashboard.admins.profile.whychooseUs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About();
        switch ($request->select_one) {
            case 'about_company':
                $this->validate($request, [
                'about_company' => 'required',
                'video' => 'required',
                'location' => 'required',
                'email' => 'required|email',
                'phone' => 'required|max:20'
                ]);
                $about->about = $request->about_company;
                $about->video = $request->video->store('public/about_video');
                $about->location = $request->location;
                $about->email = $request->email;
                $about->phone = $request->phone;
                $about->save();
                return "hi";
                break;

            case 'partner':
                $this->validate($request, [
                'partner_name' => 'required',
                'partner_logo' => 'required|image',
                ]);
                $about->partner_name = $request->partner_name;
                $about->partner_logo = $request->partner_logo->store('public/partnerLogo');
                $about->save();
                return "hi";
                break;

            case 'team':
                $this->validate($request, [
                'employee_name' => 'required',
                'employee_photo' => 'required|image',
                'employee_position' => 'required',
                ]);
                $about->employee_name = $request->employee_name;
                $about->employee_photo = $request->employee_photo->store('public/employee');
                $about->employee_position = $request->employee_position;
                $about->save();
                return "hi";
                break;

            case 'whyus':
                $this->validate($request, [
                'why_title' => 'required|max:255',
                'why_details' => 'required|max:1024',
                ]);
                $about->why_title = $request->why_title;
                $about->why_details = $request->why_details;
                $about->save();
                return "hi";
                break;
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
