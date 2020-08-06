<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class SuperAdminController extends Controller
{
     /*
    |--------------------------------------------------------------------------
     Super Admin Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */



    public function index()
    {
        return 'hi';
$user = User::find(1);
if($user){
    return view('admin.auth.register');
}else{
    return redirect(url('admin'));
}
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function showRegistrationForm ()
    {
        return view('admin.auth.register');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(Request $request, $role)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $role,
        ]);
        return 'done';
    }
}
