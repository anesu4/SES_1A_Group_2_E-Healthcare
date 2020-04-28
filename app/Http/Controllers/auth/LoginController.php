<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\Patient;
use Illuminate\Http\Request;
use Mail;
use Cookie;
use Session;
use Illuminate\Support\Facades\DB;
use App\Product;
use URL;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

// use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Mobile number
     *
     * @var integer
     */
    protected $mobile = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
        Session::put('backUrl', URL::previous());
    }


    public function redirectTo()
    {
        return Session::get('backUrl') ? Session::get('backUrl') :   $this->redirectTo;
    }

    public function index(Request $request) {
        $data['title'] = 'Sign In';
        if(isset($_GET['id']) && $_GET['id'] != ''){
            $id = $_GET['id'];
            $user_info = USER::where('id',$id)->first();
            if(!empty($user_info)){
                $data['email'] = $user_info->email;
            }else{
                $data['email'] = '';
            }
        }else{
            $data['email'] = '';
        }

        $from = !empty($_GET['from']) ? base64_decode($_GET['from']) : '';
        $data['from'] = $from;

        $pid = !empty($_GET['pid']) ? $_GET['pid'] : '';
        $data['pid'] = $pid;

        return view('auth/login')->with($data);
    }

    public function login(Request $request) {
        Product::resetPostingCoockies();
        $username = isset($request->email) ? trim($request->email) : '';
        $from = isset($request->from) ? trim($request->from) : '';
        $pid = isset($request->pid) ? trim($request->pid) : '';

        if(is_numeric($username)) {
                $patient = Patient::where(DB::raw("LTRIM(mobile)+0"), $username)->first();
                if(!empty($patient)) {
                    $mobile = $patient->mobile;
                    $this->mobile = $mobile;
                }
        }

        $this->validateLogin($request);

        if(!empty($username)) {
            if(is_numeric($username)) {
                $patient = Patient::where(DB::raw("LTRIM(mobile)+0"), $username)->first();
                $message = 'Mobile number is not registered on the platform';
            } else {
                $patient = Patient::where('email', $username)->first();
                $message = 'Email is not registered on the platform';
            }
        }

        if(is_null($patient) || empty($patient)) {
             return redirect()
                ->back()
               ->withErrors(['active' => $message]);

        } else {
        $remember_me = $request->has('remember');
        if ($remember_me == '1') {
            Cookie::queue('email', $request->email, 360000);
            Cookie::queue('password', $request->password, 360000);
        } else {
            Cookie::queue('email', $request->email, -360000);
            Cookie::queue('password', $request->password, -360000);
        }
        
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->guard()->validate($this->credentials($request))) {
            $patient = $this->guard()->getLastAttempted();
            if ($patient->is_email_verified == 0) {
                Session::flash('error', 'Please verify your email.');
            }

            // Make sure the patient is active

            if ($patient->is_active && $patient->is_deleted == 0 && $patient->role_id == NULL && $this->attemptLogin($request)) {
                $request->session()->regenerate();
                $this->clearLoginAttempts($request);
                // Send the normal successful login response

                if(!empty($from) && !empty($pid)){
                    return redirect($from.'/'.$pid);
                }else if(!empty($from)) {
                    return redirect($from);
                } else {
                    $this->redirectTo = '/';
                }

                //return $this->sendLoginResponse($request);
            } else {
                // Increment the failed login attempts and redirect back to the
                // login form with an error message.
                $this->incrementLoginAttempts($request);
                return redirect()
                                ->back()
                                ->withInput($request->only($this->username(), 'remember'))
                                ->withErrors(['active' => 'The patient account is disabled or archived.']);
            }
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the patient back to the login form. Of course, when this
        // patient surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);


        return $this->sendFailedLoginResponse($request);
    }
    }

    /**
     * Log the patient out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request) {
        Product::resetPostingCoockies();
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login');
    }
}