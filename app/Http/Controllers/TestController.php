<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function contacts(){
        $adress="Main street, 15";
        $data=['name' => 'Telemachus','phone'=> '79999999', 'age'=> 20];
        return view('contacts', compact('adress', 'data'));
    }

    public function mysite(){
        return view('mysite');

    }
}
