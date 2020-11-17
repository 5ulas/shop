<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;

class EmployeeController extends Controller
{
    public function show($id)
    {
        //return view('employee.profile', ['user' => Employee::findOrFail($id)]);
    }

    public function index(){


        $users = User::all();

        return view('employee.index', compact('users'));
    }

    public function delete($id){

        $rsltDelRec = User::find($id);
     
        $rsltDelRec->delete();        
     
        return redirect()->route('employee.index');
     }
}
