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
}
