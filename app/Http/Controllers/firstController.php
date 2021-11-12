<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class firstController extends Controller
{
    //
    public function getUser(){
        $users = User::all();
        return $users;
        
    }

    public function createUser(Request $request){
        $user = User::create($request->all());

        return $user;
    }
}
