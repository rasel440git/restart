<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function homePage(){

        $student=['Name'=>'Rasel',
                   'Address'=>'Dhaka',
                    'Phone'=>'00892839432'];
        return view('page.home',['studentData'=>$student]);
    }

    public function aboutPage(){
        return view('page.about');
    }
    public function coursesPage(){
        return view('page.courses');
    }
    public function signinPage(){
        return view('page.signin');
    }
    public function signupPage(){
        return view('page.signup');
    }
    public function layputHeaderPage(){
        return view('layout.header');
    }
    public function layoutFooterPage(){
        return view('layout.footer');
    }
}
