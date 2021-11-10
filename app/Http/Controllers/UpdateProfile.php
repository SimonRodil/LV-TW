<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UpdateProfile extends Controller
{

    public function __innit() {
        $this->middleware('auth');
    }
    //
    public function update(User $user){

        $query = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|same:password_confirmation|min:8'
        ]);

        /* if(!empty($query['password'])):
            
            $user->password = Hash::make($query['password']);
            $user->save();

        endif; */

        /* $user->update([
            'name' => request()->name,
            'email' => request()->email,
        ]); */

        # Check if there is a new password and Save it, otherwise just save the one already based in database.
        $query['password'] = (!empty($query['password']) ? Hash::make($query['password']) : $user->password);

        $user->update($query);

        return redirect('/profile');
    }
}
