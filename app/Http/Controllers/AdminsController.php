<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminsController extends Controller
{
    public function create(){
        return view('admin.login');
    }

    public function store(){
        if(Auth::guard('admin')->attempt(['email'=>request('email'),'password' => request('password')])){
            return redirect('/admin');
        }else{
            return back();
        }
    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->guest(url('/admin/login'));
    }
}
