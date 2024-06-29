<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public, protected, private, default
    public function showProduct(){
        $data=[
            [
                'id' => '1',
                'name' => 'iPhone 15',
                'price' => 20000000000
            ],
            [
                'id' => '2',
                'name' => 'iPhone 14',
                'price' => 9000000000
            ]
        ];
        // return view('list-product')->with([
        //     'listProduct' => $data
        // ]);

        return view('list-product', compact('data'));
    }

    public function getProduct($id){
        echo $id;
    }
    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
}
