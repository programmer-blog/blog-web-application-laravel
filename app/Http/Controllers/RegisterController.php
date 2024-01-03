<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username', //'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);
        //user password encryption through mutator in Model - accesor
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success', 'Your account has been created');
    }
}
