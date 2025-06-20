<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){
        User::create([
            'username' => $request -> username,
            'email' => $request -> email
        ]);
    }

}
