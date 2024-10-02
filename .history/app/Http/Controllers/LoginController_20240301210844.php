<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('login');
    }
    public function store(Request $request){
        $input=$request->all();
        $validateData=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=$request->only('email','password');
        if(Auth::attempt($user)){
            
            return redirect('welcome');
        }else{
            session()->flash('Error','Wrong Email Or Password');
            return redirect('login');

        }
    }
}
