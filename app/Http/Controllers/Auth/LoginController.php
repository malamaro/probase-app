<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     "email"=> "required|email",
        //     "password"=> "required",
        // ]);

        if (Auth::attempt(["email" => $request->email, "password" =>$request->password])) {
            return redirect("welcome")->intended("/");
        }

        dd("dfghj");
    }
}
