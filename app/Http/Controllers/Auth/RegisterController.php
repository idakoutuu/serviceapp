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
            'birth' => ['required', 'date'],
            'photo' => ['string'],
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'birth' => $data['birth'],
            'photo' =>$data['photo'],
        ]);
    }

    public function verification(Request $request)
    {
        $this->validator($request->all())->validate();
        $inputs = $request->all();
        return view('auth.verification', ['inputs' => $inputs]);
    }

    protected function registered(Request $request, $user)
    {
        $request->validate([
        'photo' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    }

    public function store(PhotoRequest $request)
    {
        $request->photo->storeAs('public/profile_images', Auth::id().'jpg');
        return redirect('home')->with('success'.'新しいプロフィールを登録しました');
    }

    public function index()
    {
        $is_image = false;
        if (Storage::disk('local')->exists('public\profile_images' . Auth::id() . 'jpg')) {
            $is_image = true;
        }
        return view('auth.verification', ['is_image' => $is_image]);
    }
}
