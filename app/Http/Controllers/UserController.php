<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    
    public function register(Request $request,User $user)
    {
        $u = $user;
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = $request->password;
        $u->save();
        return response()->json('success');
    }
}
