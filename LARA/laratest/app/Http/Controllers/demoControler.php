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
            $name= $request->input('name');
            $roll= $request->input('roll');
            $city= $request->input('city');
            $password= $request->header('pin');
            $loction= $request->loction;
            $bGroup= $request->bGroup;


            // return [$name,$roll,$city];

            // return $request->input();
            // return $request->header();
            return [$name, $roll, $city, $password, $loction, $bGroup] ;
        }
    }

    public function inputFunction(Request $request){

        return $request->input('Name');
    }
    public function headerFunction(Request $request, $id){

        // return $request->header('pass');
        $inputId= "Your Inserted Id = ".$id;
        // return  $inputId ;
        // echo  $inputId ;
        return  response($inputId );

    }

    public function invoiceFunction(Request $request, $id, $itemName){
        $invoiceID= "Your invoice Id is ". $id."</br>";
        $invoiceName= "Your item Name is " .$itemName;
          return response($invoiceID. $invoiceName);
        //return ("{$invoiceID} {$invoiceName}");
    }

    public function allInvoices(Request $request){
         $inputId= "All invoices";
      
        return  response($inputId );
    }

    public function allCountries(Request $request){
        $page= $request->input('page',1);
        $perPage= $request->input('perpage',1);
        $output= "Your page number is ".$page." and showing total " .$perPage." pages";
        return response($output);
        // return view("countries");
    }

    public function contact(Request $request){
            if($request->isMethod('post')){
                $data=[];
                $data['email']= $request->input('email');
                $data['phone']= $request->input('phone');
                $data['message']= $request->input('message');
                return response()->json($data);

            }
        return view('contact');
    }
}
