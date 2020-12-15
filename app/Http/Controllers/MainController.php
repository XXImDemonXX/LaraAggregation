<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function Operations(Request $totals)
    {
        $totals= DB::table('maindatas')->sum('pPrice');
        print_r($totals['product-list']);
    }
    public function insertProduct(Request $request)
    {
        DB::table('maindatas')->insert([
            'pName'=>$request->pname,
            'pQuentity'=>$request->pquentity,
            'pPrice'=>$request->pprice
        ]);
        return back()->with('pinsert_message','Product Inserted Successfully!');
    }
    public function productList()
    {
        $products = DB::table('maindatas')->get();
        return view('product-list', compact('products'));
    }

}
