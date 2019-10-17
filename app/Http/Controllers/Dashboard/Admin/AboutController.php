<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\About;
use App\Whyus;
use App\Employee;
use App\Partener;
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
        $about = About::latest()->take(1)->first();
       return view('dashboard.admins.profile.contactus',compact('about'));
    }

    public function createPartner()
    {
        $about = About::latest()->take(1)->first();
       return view('dashboard.admins.profile.partnersSuccess',compact('about'));
    }

    public function createTeam()
    {
        $about = About::latest()->take(1)->first();
       return view('dashboard.admins.profile.team',compact('about'));
    }

    public function createwhyUs()
    {
        $about = About::latest()->take(1)->first();
       return view('dashboard.admins.profile.whychooseUs',compact('about'));
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
        $partener = new Partener();
        $employee = new Employee();
        $whyus = new Whyus();

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
                return redirect()->route('admin.dashboard');
                break;

            case 'partner':
                $this->validate($request, [
                'partner_name' => 'required',
                'partner_logo' => 'required|image',
                ]);
                $partener->about_id = $request->about_id;
                $partener->partner_name = $request->partner_name;
                $partener->partner_logo = $request->partner_logo->store('public/partnerLogo');
                $partener->save();
                return redirect()->route('admin.dashboard');
                break;

            case 'team':
                $this->validate($request, [
                'employee_name' => 'required',
                'employee_photo' => 'required|image',
                'employee_position' => 'required',
                ]);
                $employee->about_id = $request->about_id;
                $employee->employee_name = $request->employee_name;
                $employee->employee_photo = $request->employee_photo->store('public/employee');
                $employee->employee_position = $request->employee_position;
                $employee->save();
                return redirect()->route('admin.dashboard');
                break;

            case 'whyus':
                $this->validate($request, [
                'why_title' => 'required|max:255',
                'why_details' => 'required|max:1024',
                ]);
                $whyus->about_id = $request->about_id;
                $whyus->why_title = $request->why_title;
                $whyus->why_details = $request->why_details;
                $whyus->save();
                return redirect()->route('admin.dashboard');
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
        switch ($request->select_one) {
            case 'about_company':
                return view('');
                break;
            case 'partner':
                return view('');            
                break;
            case 'team':
               return view('');
                break;
            case 'whyus':
                return view('');
                break;
            
            default:
                # code...
                break;
        }
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
        
        switch ($request->select_one) {
            case 'about_company':
            $this->validate($request, [
                'about_company' => 'required',
                'video' => 'required',
                'location' => 'required',
                'email' => 'required|email',
                'phone' => 'required|max:20'
                ]);
                $about = About::findOrFail($id);
                $about->about = $request->about_company;
                $about->video = $request->video->store('public/about_video');
                $about->location = $request->location;
                $about->email = $request->email;
                $about->phone = $request->phone;
                $about->save();
                \Session::flash('success' , 'تم التعديل بنجاح');
                break;

            case 'partner':
                $this->validate($request, [
                'partner_name' => 'required',
                'partner_logo' => 'required|image',
                ]);
                $partener = Partener::findOrFail($id);
                $partener->partner_name = $request->partner_name;
                $partener->partner_logo = $request->partner_logo->store('public/partnerLogo');
                $partener->save();
                \Session::flash('success' , 'تم التعديل بنجاح');
                break;

            case 'team':
                $this->validate($request, [
                'employee_name' => 'required',
                'employee_photo' => 'required|image',
                'employee_position' => 'required',
                ]);

                $employee = Employee::findOrFail($id);
                $employee->employee_name = $request->employee_name;
                $employee->employee_photo = $request->employee_photo->store('public/employee');
                $employee->employee_position = $request->employee_position;
                $employee->save();
                \Session::flash('success' , 'تم التعديل بنجاح');
                break;

            case 'whyus':
                $this->validate($request, [
                'why_title' => 'required|max:255',
                'why_details' => 'required|max:1024',
                ]);
                $whyus =    Whyus::findOrFail($id);
                $whyus->why_title = $request->why_title;
                $whyus->why_details = $request->why_details;
                $whyus->save();
                \Session::flash('success' , 'تم التعديل بنجاح');
                break;
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
        //
    }
}
