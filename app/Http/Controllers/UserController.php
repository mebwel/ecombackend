<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register(Request $req)
    {

        $user = new User;
        $user->name = $req->input('name');
        $user->password = Hash::make($req->input('password'));
        $user->email = $req->input('email');

        $user->save();
        return $user;
    }
}