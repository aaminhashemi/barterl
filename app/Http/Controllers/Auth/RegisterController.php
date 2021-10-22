<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        /*$request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|numeric|digits:11|unique:users',
            'password' => 'required|string|alpha_num|min:8|confirmed',
        ],*/
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'digits:11', 'unique:users'],
            'password' => ['required', 'string', 'alpha_num','min:8', 'confirmed'],
        ],
        [
            'firstname.required' => 'نام خود را وارد کنید.',
            'firstname.max' => 'نام نمی تواند بیشتر از 255 کاراکتر باشد.',
            
            'lastname.required' => 'نام خانوادگی خود را وارد کنید.',
            'lastname.max' => 'نام خانوادگی نمی تواند بیشتر از 255 کاراکتر باشد.',
            
            'email.required' => 'ایمیل خود را وارد کنید.',
            'email.unique' => 'کاربری با این آدرس ایمیل وجود دارد.',
            'email.email' => 'ایمیل خود را به صورت صحیح وارد کنید.',
            'email.max' => 'ایمیل نمی تواند بیشتر از 255 کاراکتر باشد.',

            'phone.required' => 'شماره تلفن خود را وارد کنید.',
            'phone.numeric' => 'شماره تلفن همراه باید فقط متشکل از اعداد باشد.',
            'phone.digits' => 'شماره تلفن همراه باید 11 رقم باشد.',
            'phone.unique' => 'کاربری با این شماره تلفن وجود دارد.',

            'password.required' => 'گذرواژه ی خود را وارد کنید.',
            'password.alpha_num' => 'گذرواژه باید شامل حروف و اعداد باشد.',
            'password.min' => 'گذرواژه حداقل باید 8 کاراکتر باشد.',
            'password.confirmed' => 'تایید گذرواژه مطابقت ندارد. دوباره امتحان کنید.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
