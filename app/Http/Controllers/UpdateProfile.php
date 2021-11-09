<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UpdateProfile extends Controller
{

    public function __innit() {
        $this->middleware('auth');
    }
    //
    public function update(User $user){

        $validate = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email']
        ]);

        $process = $user->update([
            'name' => request()->name,
            'email' => request()->email,
        ]);

        return ($validate);
    }
}
