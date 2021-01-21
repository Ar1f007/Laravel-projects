<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){ //if user is blank and password doesn't match
            return "username or password is not matched";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}