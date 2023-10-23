<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function authentication(Request $request)
    {
        $jsonData = $request->json()->all();

        $password = hash('sha256', $jsonData["password"]);
        $answer = Password::where("id", "=", 1)->first()["password"];
        
        return $password === $answer ? "true" : "false";
    }
}
