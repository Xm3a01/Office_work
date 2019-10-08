<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Exp;
use App\Role;
use App\User;
use App\Level;
use App\SubSpecial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Exp::all();
        $roles = Role::all();
        $users = User::all();
        $levels = Level::all();
        $sub_specials =  SubSpecial::all();

        return view('dashboard.admins.exper.index' , compact(['experiences','levels','roles','sub_specials','users']));
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
        $request->validate([
            'user_id' => 'required',
            'role_id' => 'required',
            'sub_special_id' => 'required',
            'level_id' => 'required',
            'ar_description' => 'required',
            'expert_pdf' => 'required',
            'expert_year' => 'required',
        ]);

        $experience = new Exp();
        $user = User::findOrFail($request->user_id);
        $role = Role::findOrFail($request->role_id);
        $sub_special = SubSpecial::findOrFail($request->sub_special_id);
        $level = Level::findOrFail($request->level_id);

        $experience->user_id = $request->user_id;
        $experience->ar_name = $user->ar_name;
        $experience->name = $user->name;
        $experience->ar_role = $role->ar_name;
        $experience->role = $role->name;
        $experience->ar_sub_special = $sub_special->ar_name;
        $experience->sub_special = $sub_special->name;
        $experience->ar_level = $level->ar_name;
        $experience->level = $level->name;
        $experience->expert_year = $request->expert_year;
        $experience->start_month = $request->start_month;
        $experience->start_year = $request->start_year;
        $experience->end_year = $request->end_year;
        $experience->end_month = $request->end_month;

        if($request->has('expert_pdf')){
        $experience->expert_pdf = $request->expert_pdf->store('public/expert_cv');
        }

        if($experience->save()) {
            \Session::flash('success','تمت الاضافه بنجاح');
            return Redirect()->route('experiences.index');
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
        $experience = Exp::findOrFail($id);
        $roles = Role::all();
        $users = User::all();
        $levels = Level::all();
        $sub_specials =  SubSpecial::all();

        return view('dashboard.admins.exper.edit' , compact(['experience','levels','roles','sub_specials','users']));
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
        $request->validate([
            'user_id' => 'required',
            'role_id' => 'required',
            'sub_special_id' => 'required',
            'level_id' => 'required',
            'ar_description' => 'required',
            'expert_year' => 'required',
        ]);

        $experience = Exp::findOrFail($id);
        $user = User::findOrFail($request->user_id);
        $role = Role::findOrFail($request->role_id);
        $sub_special = SubSpecial::findOrFail($request->sub_special_id);
        $level = Level::findOrFail($request->level_id);

        $experience->ar_name = $user->ar_name;
        $experience->name = $user->aname;
        $experience->ar_role = $role->ar_name;
        $experience->role = $role->name;
        $experience->ar_sub_special = $sub_special->ar_name;
        $experience->sub_special = $sub_special->name;
        $experience->ar_level = $level->ar_name;
        $experience->level = $level->name;
        $experience->expert_year = $request->expert_year;
        $experience->start_month = $request->start_month;
        $experience->start_year = $request->start_year;
        $experience->end_year = $request->end_year;
        $experience->end_month = $request->end_month;

        if($request->has('expert_pdf')){
            \Storage::delete($experience->expert_pdf);
             $experience->expert_pdf = $request->expert_pdf->store('public/expert_cv');
        }

        if($experience->save()) {
            \Session::flash('success','تم التعديل بنجاح');
            return Redirect()->route('experiences.index');
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
        $experience = Exp::findOrFail($id);
        \Storage::url($experience->expert_pdf);
        $experience->delete();

        \Session::flash('success','تم الحذف بنجاح');
        return Redirect()->route('experiences.index');
    }
}
