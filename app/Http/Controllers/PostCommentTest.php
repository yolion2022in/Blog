<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCommentTest extends Controller
{
    public function pctest ($post=8, $comment=7){
        return "posts $post , comments $comment";
    }

    // public function pctest ($post = $args){
    //     return "posts $post , comments $comment";
    // }
}
