<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Whoops\Handler\JsonResponseHandler;

class demoControler extends Controller
{

    public function imageUpload(){

    }
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

    public function contact(Request $request) {
            if($request->isMethod('post')){
                $data=[];
                $data['email']= $request->input('email');
                $data['phone']= $request->input('phone');
                $data['message']= $request->input('message');
                $data['photo']= $request->input('photo');
                //return response()->json('$data');
                dd($data);
            }
         return view('contact');

    //    if ($request->hasFile('photo')) {
    // $photoReq = $request->file('photo');
    // $photoReq->storeAs('upload', $photoReq->getClientOriginalName());
    // } else {
    //     return "Flase"
    // }

    }

    public function fileUpload(Request $request)  {

        // if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo->storeAs('upload', $photo->getClientOriginalName());
            $photo->move(public_path('upload'), $photo->getClientOriginalName());
    //         return "File uploaded!";
    //         } else {
    //             return "No file uploaded.";
    //         }

    return true; 
     }

     public function cookeReq(Request $request){
        // return $request-> cookie('Cookie_2');

        $name="Token";
        $value= "this is value";
        $minutes= 60;
        $path="/";
        $domain= $_SERVER['SERVER_NAME'];
        $secure= false;
        $httpOnly=true;
        return response('Hi')-> cookie($name, $value,$minutes,$path,$domain,$secure, $httpOnly);


     }

     public function jResp(Request $request): JsonResponse{
        $code=200;
        $content= array('name'=>'Jack','city'=>'Dhaka');

        return response()->json($content,$code);
     }

     public function fileBinary(){
        $filePath= "upload/testImg.jpg";
        return response()->file($filePath);
     }

     public function fileDownload(){
        $filePath= "upload/testImg.jpg";
        return response()->download($filePath);
     }


}
