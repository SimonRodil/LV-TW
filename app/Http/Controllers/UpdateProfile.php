<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UpdateProfile extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('auth.profile');
    }

    //
    public function update(User $user){

        # Valid the fields.
        $query = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|same:password_confirmation|min:8'
        ]);

        # Check if there is a new password and Save it, otherwise just save the one already based in database.
        $query['password'] = (!empty($query['password']) ? Hash::make($query['password']) : $user->password);

        # Proceed to update.
        $user->update($query);

        # Return.
        return redirect('/profile');
    }
}
