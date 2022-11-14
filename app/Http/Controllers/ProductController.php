<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function index(){
        // B1: Lay du lieu tu DB
        $products = DB::table('phones')->get();

        // B2: Do du lieu ve view
        return view('product.index', ['products'=>$products]);
    }
    function delete($id){
        DB::table('phones')->delete($id);
        return redirect()->back();
    }
}
