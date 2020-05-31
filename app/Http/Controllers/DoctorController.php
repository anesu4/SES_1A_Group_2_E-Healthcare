<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class DoctorController extends Controller
{
    public function __construct(){
        $this->middleware('auth:doctors');
    }

    public function index(){
        return view('doctor-dashboard');
    }

    public function showAdmin(){
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
    //Validate the Form Data
    $this->validate($request, [
        'name'=>'required|name',
        'email'=>'required|email',
        'password'=>'required|min:5'
    ]);

    //Attempt to log the Admin In
    $email= $request->email;
    $password= $request->password;
    $remember= $request->remember;

    //If Successful redirect to intended location
    if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)) {
        return redirect()->intended(route('admin.dashboard'));
    }

    //If Unsuccessful redirect back to login form with form data
    return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
