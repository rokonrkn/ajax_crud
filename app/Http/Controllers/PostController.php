<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function storeStudent(Request $request){
        return dd($request);
    }
}
