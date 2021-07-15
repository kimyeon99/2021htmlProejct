<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $name = $request->name;
        $password = $request->password;

        $user = new User();
        $user->user_id = $user_id;
        $user->name = $name;
        $user->password = $password;

        $user->save();

        return redirect()->route('login', ['user' => $user]);
    }
}
