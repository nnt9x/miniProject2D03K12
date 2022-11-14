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

    function show($id){
        $product = DB::table('phones')->find($id);

//        dd($product);
        return view('product.details', ['product'=>$product]);
    }

    function create(){
        return view('product.create');
    }

    function save(Request $request){
        // B1: Lay du lieu
        $name = $request->get('pName');
        $price = $request->get('pPrice');
        $description = $request->get('pDescription');
        $image = $request->get('pImage');

        // B2: Luu vao db
        DB::table('phones')->insert(
            ['name'=>$name, 'price'=>$price, 'description'=>$description,'image'=>$image]
        );

        // B3: chuyen huong ve trang quan ly san pham
        return redirect()->route('home');
    }

    function edit($id){
        $product = DB::table('phones')->find($id);

        return view('product.edit', ['product'=>$product]);
    }

    function update(Request $request, $id){
        $name = $request->get('pName');
        $price = $request->get('pPrice');
        $description = $request->get('pDescription');
        $image = $request->get('pImage');

        // Cap nhat vao CSDL
        DB::table('phones')->where('id',$id)->update(
            ['name'=>$name, 'price'=>$price, 'description'=>$description,'image'=>$image]
        );
        // Chuyen huong ve trang truoc do
        return redirect()->back();
    }


}
