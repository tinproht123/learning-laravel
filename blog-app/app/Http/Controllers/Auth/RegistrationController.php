<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        $user_role = Role::where('name', '=', 'USER')->firstOrFail();

        $new_user = new User;

        $new_user->first_name = $data['first_name'];
        $new_user->last_name = $data['last_name'];
        $new_user->email = $data['email'];
        $new_user->password = Hash::make($data['password']);

        $user_role = $user_role->users()->save($new_user);

        return $new_user;
    }
}