<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $input=$request->all();
        $validateData=$request->validate([
            'username'=>'required|max:255',
            'email'=>'required|unique:users,email|max:255',
            'phone'=>'required|max_digits:11',
            'password'=>'required'
        ]);

        User::create([
            
            'username'=>$request->username,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->password

        ]);
        session()->flash('Add','Your Account Was Successfully Created');

        
        return redirect('/register');

        
    }
}
