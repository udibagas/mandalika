<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function migrate(Request $request)
    {
        Artisan::call('migrate');
        return ['message' => 'Migration success'];
    }

    public function newUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $input['api_token'] = Str::random(64);
        return User::create($input);
    }
}
