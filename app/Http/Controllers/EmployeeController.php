<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show($id)
    {
        return view('employee.profile', ['user' => User::findOrFail($id)]);
    }

    public function index(){


        $users = User::all();

        return view('employee.index', compact('users'));
    }

    public function delete($id){

        $rsltDelRec = User::find($id);
     
        $rsltDelRec->delete();        
     
        return redirect()->route('employees.index');
    }
    public function deletemyself($id){

        $rsltDelRec = User::find($id);
        
        $rsltDelRec->delete();        
        
        return redirect()->route('home');
    }
    public function edit(User $user) {
        return view('employee.update', compact('user'));
    }
    public function update(User $user){
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'age' => 'nullable|integer|between:14,200',
            'IBAN' => '',
            
        ]);
        $user->employee();
        // dd($user->employee());
        // dd($data['age']);
        
        $emp = Employee::updateOrCreate(
            ['user_id'=>$user->id],
            ['name' => $data['name'], 'surname' => $data['surname'],
            'age'=>$data['age'],'IBAN'=>$data['IBAN'], 'user_id'=>$user->id]
        );

        return redirect(route('employee.profile', $user->id));
    }
}
