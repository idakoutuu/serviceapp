<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Hobby;
use App\Prefecture;
use App\Profession;


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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
            'gender' => ['required'],
            'birth' => ['date'],
            'birth_year'  => ['required_with:birth_month,birth_day'],
            'birth_month' => ['required_with:birth_year,birth_day'],
            'birth_day'   => ['required_with:birth_year,birth_month'], 
        ]);
    }

    public function imgValidate(Request $request)
    {
        return $request->validate([
            'photo' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
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
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'gender'   => $data['gender'],
            'birth'    => $data['birth'],
            'photo'    => $data['photo'],
        ]);
    }

    public function showRegistrationForm(Hobby $hobby, Prefecture $prefecture, Profession $profession)
    {
        $hobbies     = $hobby->all();
        $prefectures = $prefecture->all();
        $professions = $profession->all();
        return view('auth.register', ['hobbies' => $hobbies, 'prefectures' => $prefectures, 'professions' => $professions]);
    }

    public function verification(Request $request)
    {
        $inputs = $request->input();
        $this->validator($inputs)->validate();
        $this->imgValidate($request);

        $uploadedFile = $this->saveImage($request->file('photo'));
        $data = [
            'inputs'       => $inputs,
            'pref'         => Prefecture::find($request->prefecture_id),
            'hobbies'      => Hobby::find($request->hobby)->pluck('hobby', 'id')->toArray(),
            'professions'  => Profession::find($request->profession_id),
            'uploadedFile' => str_replace('public', 'storage', $uploadedFile),
        ];
        
        return view('auth.verification', $data);
    }

    private function saveImage($file)
    {
        return $file->storeAs('public/tmp_images', $file->hashName());
    }
}
