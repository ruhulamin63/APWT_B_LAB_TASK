<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class UserController extends Controller
{
    public function index(){

         $users = Register::all();

        return view('user.list')->with('userlist', $users);
    }
// ============================ End index ====================================

    public function details($id){

        $user = Register::find($id);

        return view('user.details')->with('user', $user);
    }
// ============================ End Details ====================================

    public function create(){
        return view('user.create');
    }
// ============================ End Create ====================================

    public function insert(Request $req){

         $users = new Register;

        $users->username = $req->uname;
        $users->name = $req->name;
        $users->password = $req->password;
        $users->email = $req->email;
        $users->type = $req->type;
        $users->save();

        return redirect()->route('user.index');
    }
// ============================ End Insert ====================================

    public function edit($id){

        $users= Register::find($id);
        return view('user.edit')->with('user', $users);
    }
// ============================ End Edit ====================================

    public function update(Request $req, $id){
        $users = Register::find($id);
        
        $users->username = $req->uname;
        $users->name = $req->name;
        // if($users->password != $req->password){
        //     $users->password = $req->password;
        // }
        $users->email = $req->email;
        $users->type = $req->type;
        $users->save();

        return redirect()->route('user.index');
    }
// ============================ End Update ====================================

    public function delete($id){
  
        $users = Register::find($id);
        
        return view('user.delete')->with('user', $users);
    }
// ============================ End Delete ====================================

    public function destroy($id){

        $users = Register::find($id);
        $users->delete();

         return redirect()->route('user.delete');
    }
// ============================ End Destroy ====================================
}
