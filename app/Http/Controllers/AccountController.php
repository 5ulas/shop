<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class AccountController extends Controller
{
    public function show($id)
    {
        return view('account.profile', ['user' => User::findOrFail($id)]);
    }
}
