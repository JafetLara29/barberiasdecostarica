<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Barbershop;
use App\Models\SocialMedia;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
                'name'     => ['required', 'string', 'max:255'],
                'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone'    => ['required', 'numeric'],
                'name'     => ['required', 'string'],
                'canton'   => ['required', 'string'],
                'address'  => ['required', 'string']
            ],
            [
                'required' => 'Este input es requerido',
                'phone.numeric'=> 'Este input solo puede contener numeros',
                'password.confirmed'=> 'Las contraseñas ingresadas deben coincidir'
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(  array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $barbershop = Barbershop::create([
                'name'   => $data['name'],
                'address'=> $data['address'],
                'canton' => $data['canton'],
                'user_id'=> $user->id
            ]
        );
            $barbershop= Barbershop::findOrFail($barbershop);
        SocialMedia::create([
            'data'                => $data['phone'],
            'type'                => 'Telefono',
            'social_mediable_id'   => $barbershop->id,
            'social_mediable_type' => $barbershop->user_id,
        ]);

        return $user;
    }
}
