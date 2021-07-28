<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\User;
use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;



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
    protected $redirectTo = '/dashboard';

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
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        $isCompany = isset($data['isCompanyContact']) ? true : null;
        $company_name = $isCompany ? $data['company'] : null;

        $user = User::create([
            'username' => $data['username'],
            'slug' => Str::slug($data['username']),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'name' => $data['firstname'] . $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isCompanyContact' => $isCompany,
            'notify' => true
        ]);

        $profile = Profile::create([
            'about' => null,
            'user_id' => $user->id,
        ]);

        if ($isCompany) {
            Company::create([
                'name' => $data['company'],
                'slug' => Str::slug($data['company']),
                'user_id' => $user->id,
            ]);
        }

        return $user;
    }

    // Register
    public function showRegistrationForm()
    {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true
        ];

        return view('/auth/register', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function showCompanyRegistrationForm()
    {
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true
        ];

        return view('/auth/company/register', [
            'pageConfigs' => $pageConfigs
        ]);
    }
   /**
     * H andle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        if($request->session()->has('user_invite')) {
            $userInviteSlug = $request->session()->get('user_invite');

            $userInvite = User::where('slug', $userInviteSlug)->first();

            $userInvite->invite_count += 1;
            $userInvite->save();

            $request->session()->forget('user_invite');
        }

        event(new Registered($user = $this->create($request->all())));

        $user->createAsStripeCustomer();

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

}
