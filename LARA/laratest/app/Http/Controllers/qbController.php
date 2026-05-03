<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Database\Query\JoinClause;
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


            // $products= DB::table('products')
            //           ->join('categories', 'products.category_id', '=', 'categories.id')
            //           ->join('brands', 'products.brand_id', '=', 'brands.id')
            //           ->select('products.id','products.title','categories.categoryName','brands.brandName')
            //           ->get();
            
            // $productsJoin= DB::table('products')
            //           ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
            //           ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')
            //           ->select('products.id','products.title','categories.categoryName','brands.brandName')
            //           ->get();          

            // $products= DB::table('products')
            //           ->crossJoin('brands')
            //           ->get();


                // $products= DB::table('products')
                //           ->join('categories', function (JoinClause $join) {
                //             $join->on('products.category_id', '=', 'categories.id')
                //             ->where('categories.categoryName', '=', 'Clothes');                              
                //             })->get();

                   $insertData= DB::table('brands')->insert([
                        'brandName' => 'Pepsico',
                        'brandImg' => 'http://example.com/pepsico.jpg',
                    ]);



        return $insertData;
        //  return response()->json(['products' => $products, 'productsJoin' => $productsJoin]);

    }

    public function insertAction(Request $request){
        // $data= $request->all();
        // $insertData= DB::table('brands')->insert([
        //     'brandName' => $data['brandName'],
        //     'brandImg' => $data['brandImg'],
        // ]);

        // $insertData= DB::table('brands')->insert($request->all());

        // return response()->json(['message' => 'Data inserted successfully', 'inserted' => $insertData], 201);
    }

    public function updateAction(Request $request, $id){
        // $updateData= DB::table('brands')->where('id', $request->id)->update($request->input());

        $updateData= DB::table('brands')
        ->updateOrInsert(
            ['brandName' => $request->brandName],
            $request->input()
            
        );
        

        return response()->json(['message' => 'Data updated successfully', 'updated' => $updateData], 200);
    }

    public function upsertAction(Request $request, $brandName){
        $insert= brand::create($request->input());
        

        return response()->json(['message' => 'Data insert successfully', 'upserted' => $insert], 200);
    }
}
