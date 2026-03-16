<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registion extends Controller
{
    public function ShowRegistionForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $fileName = null;

    if($request->hasFile('image'))
    {
        $file = $request->file('image');

        $fileName = time().'.'.$file->getClientOriginalExtension();

        $file->move(public_path('uploads'), $fileName);
    }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return "User Registered Successfully";
    }
}