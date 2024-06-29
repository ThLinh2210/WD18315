<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudent(){
        $data=[
            [
                'id' => 'PH44680',
                'name' => 'Nguyen Thi Thuy Linh',
                'year_of_birth' => '2004',
                'hometown' => 'Ha Noi'
            ]
        ];
        // return view('list-product')->with([
        //     'listProduct' => $data
        // ]);

        return view('list-student', compact('data'));
    }
}
