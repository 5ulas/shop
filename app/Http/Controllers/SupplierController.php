<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function edit(User $user) {
        return view('supplier.update', compact('user'));
    }
    public function __construct(){
        $this->middleware('auth');
    }
    public function update(User $user){
        $data = request()->validate([
            'title' => '',
            'company_code' => '',
            'iban' => ''
        ]);
        $user->supplier()->updateOrCreate($data);
        return redirect(route('profile.show', $user->id));
    }
}
