<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class DoctorLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:doctors');
    }
    public function showLoginForm(){
        return view('auth.admin_login');
    }

    public function login(Request $request){
        // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

    return view('doctors.index');

      // Attempt to log the user in
    //   if (Auth::guard('doctors')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    //     // if successful, then redirect to their intended location
    //     return redirect()->intended(route('doctor_dashboard'));
    //   }

    //   // if unsuccessful, then redirect back to the login with the form data
    //   return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
