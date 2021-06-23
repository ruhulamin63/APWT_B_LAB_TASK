<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\RegRequest;
use App\Models\Register;

class RegController extends Controller
{
    public function index(){

        return view('registration.index');
    }

    public function insert(Request $req){

        $users = new Register;

        $users->username = $req->uname;
        $users->name = $req->name;
        $users->password = $req->password;
        $users->email = $req->email;
        $users->type = $req->type;
        $users->save();

        return redirect()->route('login.index');
    }
}
