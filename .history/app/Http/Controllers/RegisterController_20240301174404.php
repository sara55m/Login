<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $input=$request->all();
        return $input;
    }
}
