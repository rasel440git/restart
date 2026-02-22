<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forSession extends Controller
{
    public function setSession(Request $request){
        // session()->put('name','Jone Doe');
        $email= $request->email;
        $request->session()->put('email',$email);
        session(['phone','01212122']);

            return response("session data have been Sets");
    }

    public function getSession(Request $request){
        $all= session()->get('email');
        return response(content: $all);
    }

    public function sessonFlash(Request $request){
       $request-> session()->flush();
        return response('data clean');
    }

    public function testApi(Request $request){
        $countries=['BD','India','Nepal','Bhutan'];
        log::info( $countries);
        return response()->json($countries);
    }

    public function getdata(Request $request){
        $data= $request->header();
        return response()->json($data);
    }
}
