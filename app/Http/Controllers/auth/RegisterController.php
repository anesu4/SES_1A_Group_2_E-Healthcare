<?php

namespace App\Http\Controllers\auth;

use App\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Mail;
use Cookie;
use Auth;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

    public $data;
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/verification';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    protected function validator(array $data) {
        return Validator::make($data, [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255',
                    'mobile' => 'required|min:8',
                    'password' => 'required|string|min:6',
        ]);
    }

    /**
     * @param $token
     */
    public function activate($token = null) {
        $patient = Patient::where('token', $token)->first();

        if (empty($patient)) {
            return redirect()->to('/')
                            ->with(['error' => 'Your activation code is either expired or invalid.']);
        }

        $patient->update(['token' => null, 'active' => Patient::ACTIVE]);

        return redirect()->route('login')
                        ->with(['success' => 'Congratulations! your account is now activated.']);
    }

    /**
     * Create a new patient instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Patient
     */
    public function index(Request $request) {
        Cookie::queue('first_name', '', -360000);
        $data['title'] = 'Sign Up';
        if (isset($request['pid']) && $request['pid'] != '') {

            $from = !empty($_GET['from']) ? base64_decode($_GET['from']) : '';
            $data['from'] = $from;

            $proid = !empty($_GET['proid']) ? $_GET['proid'] : '';
            $data['proid'] = $proid;

            
        } else {
            $from = !empty($_GET['from']) ? base64_decode($_GET['from']) : '';
            $data['from'] = $from;

            $proid = !empty($_GET['proid']) ? $_GET['proid'] : '';
            $data['proid'] = $proid;
            $data['pid'] = 0;
            $data['email'] = '';
        }

        return view('auth/register')->with($data);
    }

    public function register(Request $request) {
        $requestData = $request->all();
        $this->validator($requestData)->validate();

        $registered_through = 1;
        $requestData['registered_through'] = $registered_through;

        $from = isset($requestData['from']) ? trim($requestData['from']) : '';
        $proid = isset($requestData['proid']) ? trim($requestData['proid']) : '';
		unset($requestData['from']);unset($requestData['proid']);
        $requestData['user_type'] = Patient::REGISTERED;
        $requestData['is_active'] = Patient::ACTIVE;

        $remove = ['password_confirmation', 'terms'];
        array_diff_key($requestData, array_flip($remove));
        $first_name = !empty($requestData['first_name']) ? trim($requestData['first_name']) : '';
        $last_name = !empty($requestData['last_name']) ? trim($requestData['last_name']) : '';
        $mobile = !empty($requestData['mobile']) ? trim($requestData['mobile']) : '';
        $email = !empty($requestData['email']) ? trim($requestData['email']) : '';
        $password = !empty($requestData['password']) ? trim($requestData['password']) : '';
        $password = bcrypt($password);

        if (!empty($email)) {
            $userEmailObj = Patient::where('email', $email)->where('user_type','!=','5')->first();
        }
        if (!empty($mobile)) {
            $userMobileObj = Patient::where('mobile', $mobile)->first();
        }

            Patient::resetRegistrationCookies();

        if (!empty($userMobileObj) && !empty($userEmailObj)) {

            return redirect('/register')
                            ->with(['error' => 'Email/Phone number is already registered, Please log in']);
        } else {
            if (!empty($userEmailObj)) {
                return redirect('/register')
                                ->with(['error' => 'Email is already registered, Please log in']);
            } elseif (!empty($userMobileObj)) {
                return redirect('/register')
                                ->with(['error' => 'Phone number is already registered, Please log in']);
            } else {
                if ($requestData['pid'] == "0") {
                    $user_exist = Patient::where('email',$email)->first();
                    if(!empty($user_exist)){
                        unset($requestData['_token']);
                        unset($requestData['pid']);
                        unset($requestData['password_confirmation']);
                        unset($requestData['terms']);
                        $requestData['password'] = $password;
                        $requestData['first_name'] = ucfirst($requestData['first_name']);
                        $requestData['last_name'] = ucfirst($requestData['last_name']);

                        if ($user_exist->user_type == Patient::REGISTERED) {
                            $requestData['user_type'] = Patient::LENDER;
                        } else if ($user_exist->user_type == Patient::BORROWER) {
                            $requestData['user_type'] = Patient::BOTH;
                        }else{
                            $requestData['user_type'] = Patient::LENDER;
                        }

                        Patient::where('id', $user_exist->id)->update($requestData);
                        $patient = Patient::where('id',$user_exist->id)->first();

                        $products_old = Product::where('owner_id', $patient->id)->where('is_publish', "1")->get();
                        if(!empty($products_old)){
                            foreach ($products_old as $item) {
                                $uinOld = $item->unique_identifier_number;
                                $uin = str_replace("TM",$patient->first_name[0].$patient->last_name[0], $uinOld);
                                \App\Resource::where('uin', $uinOld)->update(['uin' => $uin]);
                                $item->unique_identifier_number = $uin;
                                $item->save();
                            }
                        }
                        Product::where('owner_id', $patient->id)->where('is_publish', "1")->update(['is_publish' => "0", 'is_deleted' => "0"]);


                        if(!empty($from) && !empty($proid)){
                            return redirect($from.'/'.$proid);
                        }else {
                            return redirect('/dashboard')->with('success', 'Your account verified successfully and ad is posted on the  marketplace');
                        }
                    }else{
                        $patient = Patient::create($requestData);
                        $this->sendMail($patient);
                        if(!empty($from) && !empty($proid)){
                            Auth::login($patient);
                            return redirect($from.'/'.$proid);
                        }else {
                            return view('auth.verifynotifiactionpage');
                        }
                    }


                } else {

                    $product_id = $requestData['pid'];
                    $product = Product::where('id',$product_id)->where('is_publish',"1")->first();
                    if (!empty($product)) {
						
                        unset($requestData['_token']);
                        unset($requestData['pid']);
                        unset($requestData['password_confirmation']);
                        unset($requestData['terms']);
                        $requestData['password'] = $password;
                        $requestData['first_name'] = ucfirst($requestData['first_name']);
                        $requestData['last_name'] = ucfirst($requestData['last_name']);
                        $user_exist = Patient::where('id',$product->owner_id)->first();
						unset($requestData['proid']);
                        if ($user_exist->user_type == Patient::GUEST_USER) {
                            $requestData['user_type'] = Patient::LENDER;
                        } else if ($user_exist->user_type == Patient::REGISTERED) {
                            $requestData['user_type'] = Patient::LENDER;
                        } else if ($user_exist->user_type == Patient::BORROWER) {
                            $requestData['user_type'] = Patient::BOTH;
                        }
                        Patient::where('id', $product->owner_id)->update($requestData);
                        $patient = Patient::where('id',$product->owner_id)->first();
                        Auth::login($patient);
						
                        $products_old = Product::where('owner_id', $patient->id)->where('is_publish', "1")->get();
                        if(!empty($products_old)){
                            foreach ($products_old as $item) {
                                $uinOld = $item->unique_identifier_number;
                                $uin = str_replace("TM",$patient->first_name[0].$patient->last_name[0], $uinOld);
                                \App\Resource::where('uin', $uinOld)->update(['uin' => $uin]);
                                $item->unique_identifier_number = $uin;
                                $item->save();
                            }
                        }
                        Product::where('owner_id', $patient->id)->where('is_publish', "1")->update(['is_publish' => "0", 'is_deleted' => "0"]);
                        return redirect('/dashboard')->with('success', 'Your account verified successfully and ad is posted on the  marketplace');
                    } else {
                        $product = Product::where('id', $product_id)->first();
                        if ($product->is_deleted == "0") {
                            return redirect('/dashboard')->with('error', 'Your ad is archive by the admin, please contact the  admin on ben@online.com.au');
                        } else {
                            return redirect('/dashboard')->with('success', 'Your Ad is already posted on the  marketplace');
                        }
                    }
                }
            }
        }
    }
}
