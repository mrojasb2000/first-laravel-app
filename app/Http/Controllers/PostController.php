<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Welcome Post index';
    }

    public function create(){
        return 'Create Post Form';
    }

    public function show($post){
        return 'Show Post Details ' . $post;
    }

}
