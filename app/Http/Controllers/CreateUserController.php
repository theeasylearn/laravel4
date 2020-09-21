<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class CreateUserController extends Controller
{
    public function store(Request $request)
    {
        $request->merge([
            'password' => Hash::make($request->get("password")),
        ]);
        $user = User::create($request->all());
    }
}
