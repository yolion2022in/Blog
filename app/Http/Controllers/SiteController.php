<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello(){
        return 'hello';
    }

    public function login($id=1){
        if($id==1){
            return view('login');
        }
    }

    public function showGallery(){
        return view('gallery');
    }

    public function demo(){
        // //method 1
        // return view('test.demo')->with(['name'=>'王曉明', 'age'=>'<b>11</b>']);

        // //method 2
        // $data = ['name'=>'王大明', 'age'=>'<b>22</b>'];
        // return view('test.demo', $data);

        //method 3
        $name = '王三民';
        $age = '<b>33</b>';
        return view('test.demo', compact('name', 'age'));
    }
}
