<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Session;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        return view('Backend.profile');
    }

    public function profileupdate(Request $request)
    {
        $user = Admin::find(auth()->user()->id);

        if($request->type == "email"){

            if(!empty($request->email)){
                $user->email = $request->email;
                $user->save();
            }
           
            Session::flash('success'," Profile updated successfully ");  
            return redirect()->back();
        }

        if($request->type == "newpassword"){
            if(!empty($request->password)){
                $user->password = Hash::make($request->password);
                $user->save();
            }
           
            Session::flash('success'," Password change successfully ");  
            return redirect()->back();
        }
    }
}
