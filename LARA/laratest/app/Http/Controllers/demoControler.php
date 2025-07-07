<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoControler extends Controller
{
    public function test1(){
        return redirect('/thrdRoute');
    }
     public function test2(){
        echo "Hello from Test-2";
        
    }
     public function test3(){
        // echo "Hello from Test-3";
        return response()->file("jib.jpg");


    }
    public function reqFunction(Request  $request){
        {
            $name= $request->name;
            $roll= $request->roll;
            $city= $request->city;

            return [$name,$roll,$city];
        }
    }

    public function inputFunction(Request $request){

        return $request->input('Name');
    }
    public function headerFunction(Request $request){

        return $request->header('pass');
    }

    
}
