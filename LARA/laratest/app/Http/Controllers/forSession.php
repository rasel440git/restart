<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forSession extends Controller
{
    public function setSession(Request $request){
        session()->put('Jone Doe');
        $request->session()->put('email','john@mail.com');
        session(['phone','01212122']);

            return response("session data have been saved");
    }

    public function getSession(Request $request){
        
    }
}
