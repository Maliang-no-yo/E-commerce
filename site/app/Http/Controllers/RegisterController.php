<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required',
            'password' => 'required|min:5|max:20|confirmed',
        ]);

        $validation["password"] = Hash::make($validation["password"]);


        $user = User::create($validation);
        Auth::login($user);
        return redirect('/catalogue');
    }
}
