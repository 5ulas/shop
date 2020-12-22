<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

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
            case 'employee' || 'manager':
                return view('employee.profile', ['user' => $user]);
            default:
                return view('home');
        }
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        \Auth::logout();
        try {
            $user->delete();
        } catch (\Exception $e) {
            return \redirect('home');
        } finally {
            return \redirect('home');
        }
    }
}
