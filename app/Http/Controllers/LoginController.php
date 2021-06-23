<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\Admin;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(UserRequest $req){

        $user = Admin::where('email',$req->email)
            ->where('password',$req->password)
            ->first();
            
        if($user){
            $req->session()->put('email',$req->email);
            return redirect('/home');
        }else{
            $req->session()->flash('msg','Invalide username or password ?');
            return redirect('/login');
        } 
    }
}
