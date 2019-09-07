<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $settings = Setting::all()->first();
        return view('admin.settings.settings',compact('settings'));
    }

    public function update(Request $request){

        $edit = Setting::all()->first();
        $edit->site_name = $request->input('site_name');
        $edit->contact_email = $request->input('contact_email');
        $edit->contact_number = $request->input('contact_number');
        $edit->contact_address = $request->input('contact_address');
        $edit->contact_facebook = $request->input('contact_facebook');
        $edit->contact_twitter = $request->input('contact_twitter');
        $edit->contact_youtube = $request->input('contact_youtube');
        $edit->about = $request->input('about');

        $edit->save();
        return redirect(route('home'));
    }
}
