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
}
