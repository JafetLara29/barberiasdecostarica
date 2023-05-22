<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Barbershop;
use App\Models\SocialMedia;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
        $role = Role::where('name', 'barbershop')->first();
        // $user = Auth::user();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user = User::where('email', $data['email'])
                        ->where('name', $data['name'])      
                        ->get();
        $barbershop = Barbershop::create([
            'name'   => $data['name'],
            'address'=> $data['address'],
            'image'=> 'none',
            'canton' => $data['canton'],
            'user_id'=> $user[0]->id
        ]);
        $barbershop = Barbershop::where('user_id', $user[0]->id)->get();
        SocialMedia::create([
            'data'                => $data['phone'],
            'type'                => 'Telefono',
            'social_mediable_id'   => $barbershop[0]->id,
            'social_mediable_type' => Barbershop::class,
        ]);
        DB::table('role_user')->insert([
            'user_id' => $user[0]->id,
            'role_id' => $role->id
        ]);
        session(['registered' => true]);
        return $user;
    }
}
