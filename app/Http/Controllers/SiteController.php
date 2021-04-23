<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function project(){
        return view('project');
    }
    public function about_us(){
        return view('about_us');
    }
    public function works(){
        return view('works');
    }
    public function company(){
        return view('company');
    }
    public function contact(){
        return view('contact');
    }
}
