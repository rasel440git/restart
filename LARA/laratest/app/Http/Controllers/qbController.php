<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class qbController extends Controller
{
    function demoAction(){
        // $products= DB::table('products')->first();
        // $products= DB::table('products')->pluck('title', 'id');
        //  $products= DB::table('products')->count('id');
        // $products= DB::table('products')->where('price', '>', 5100)->get();
        //  $products= DB::table('products')->select('id','title','price')->get();
        //  $products= DB::table('products')->select('title')->distinct()->get();


            $products= DB::table('products')
                      ->join('categories', 'products.category_id', '=', 'categories.id')
                      ->join('brands', 'products.brand_id', '=', 'brands.id')
                      ->select('products.id','products.title','categories.categoryName','brands.brandName')
                      ->get();
            
            $productsJoin= DB::table('products')
                      ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
                      ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')
                      ->select('products.id','products.title','categories.categoryName','brands.brandName')
                      ->get();          



        // return $products;
         return response()->json(['products' => $products, 'productsJoin' => $productsJoin]);

    }
}
