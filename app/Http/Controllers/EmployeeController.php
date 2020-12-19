<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Employee;
use App\Models\Order;

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

    public function statistics($id){
        $empid=Employee::where('user_id',$id)->first();
        $ords=Order::where('employee_id',$empid->id)->get();
        $sum=0;
        $discounts=0;
        $paid=0;
        foreach($ords as $ord){
            $sum++;
            $discounts+=$ord->discount;
            if( !isset($ord->fees_id)){
                $paid++;
            }

        }
        

        return redirect(route('employee.stats', [$ords,$sum,$discounts,$paid]));
    }

}
