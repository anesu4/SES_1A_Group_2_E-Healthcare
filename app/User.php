<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use Notifiable;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

//     public static $rules = [
//         'name' => 'required|string|max:255',
//         'email' => 'required|string|email|max:255',
//         'mobile' => 'required',
//         'dateofbirth' => 'required',
//         'address' => 'required',
//         'password' => 'required|string|min:6|confirmed',
//         'email' => 'empty_with',
//    ];

    public static function getUserDetail($userID)
    {
        if(isset($userID)){
            $userInfo = User::where('id',$userID)->get();
            return $userInfo;
        }
    }
}
