<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forSession extends Controller
{
    public function setSession(Request $request){
        session()->put('name','Jone Doe');
        $request->session()->put('email','john@mail.com');
        session(['phone','01212122']);

            return response("session data have been Sets");
    }

    public function getSession(Request $request){
        $all= session()->get('name');
        return response(content: $all);
    }

    public function testApi(Request $request){
        $countries=['BD','India','Nepal','Bhutan'];
        return response()->json($countries);
    }
}
