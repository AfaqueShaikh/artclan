<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            //'mobile' => 'required|string|max:255',
            //'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['form_type'] == 'artist_form')
        {
            dd(123);
            $languages = (explode(",",$data['language']));
            $available_to_work = (explode(",",$data['available_to_work']));
            dd($available_to_work);
        }
        if($data['form_type'] == 'recruiter_form')
        {
            dd(456);
            return User::create([
                'represent' => $data['represent'],
                'looking_for' => $data['i_am_looking'],
                'company_name' => $data['company_name'],
                'city' => $data['city'],
                'mobile' => $data['mobile'],
                'email' => $data['email'],
                'user_type' => '3',
                'user_status' => '1',
                'name' => $data['name'],
                'password' => bcrypt($data['password']),
            ]);
        }
        //dd($data['language']);

    }
}
