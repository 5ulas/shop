<?php

namespace App\Http\Controllers;

use App\Models\User;

class ClientController extends Controller
{
    public function edit(User $user) {
        return view('client.update', compact('user'));
    }
    public function __construct(){
        $this->middleware('auth');
    }
    public function update(User $user){
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'age' => 'nullable|integer|between:14,200',
            'iban' => '',
            'address' => '',
            'postal_code' => ''
        ]);
        $user->client()->updateOrCreate($data);
        return redirect(route('profile.show', $user->id));
    }
}
