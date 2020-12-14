<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        switch ($user->role){
            case 'client':
                return view('client.profile',  ['user' => $user]);
            case 'supplier':
                return view('supplier.profile', ['user' => $user]);
            default:
                return view('home');
        }
    }
}
