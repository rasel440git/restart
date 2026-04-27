<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class qbController extends Controller
{
    function demoAction(){
        $products= DB::table('products')->where('price', '>', 5100)->get();
        return $products;
    }
}
