<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'nationalCode' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postalCode' => ['required', 'string', 'max:255'],
            'image' => ['required', 'file'],
            'natCardImage' => ['required', 'file'],
            'resumes' => ['required', 'file', 'mimes:pdf'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
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
        $imagePath = request('image')->store('uploads.image', 'public');
        $natCardImage = request('natCardImage')->store('uploads.natCardImage', 'public');
        $resumes = request('resumes')->store('uploads.resumes', 'public');

        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'nationalCode' => $data['nationalCode'],
            'phoneNumber' => $data['phoneNumber'],
            'address' => $data['address'],
            'postalCode' => $data['postalCode'],
            'image' => $imagePath,
            'natCardImage' => $natCardImage,
            'resumes' => $resumes,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
