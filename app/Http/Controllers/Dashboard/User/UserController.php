<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $jobs = Job::where('role','=', $user->role);
        $user->visit_count +=1;
        $user->save();
        if($user->visit_count == 1) {
           return view('dashboard.users.add_new_cv',compact(['user']));
        } else {
            $pos_info =  DB::select(DB::raw('SHOW COLUMNS FROM users'));
            $base_columns = count($pos_info);
            $not_null = 0;
            foreach ($pos_info as $col){
                $not_null += app('App\User')::selectRaw('SUM(CASE WHEN '.$col->Field.' IS NOT NULL THEN 1 ELSE 0 END) AS not_null')->where('id', '=', Auth::user()->id)->first()->not_null;
            }
            $count = ($not_null/$base_columns)*100;
            $users = User::all();
            return view('dashboard.users.account_result',compact(['users','count','user','jobs']));
        }
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
