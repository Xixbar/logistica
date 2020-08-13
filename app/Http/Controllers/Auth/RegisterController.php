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
            
            'cedula' => ['unique:users'],
            //'nit' => ['unique:users'],
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string'],
            'ciudad' => ['required', 'string'],
            'correoPersonal' => ['string', 'email', 'unique:users'],
            'correoEmpresarial' => [ 'string', 'email'],
            //'email1' => ['string', 'email', 'unique:users'],
           // 'email2' => ['string', 'email', 'unique:users'],
            'telefono' => ['required', 'string'],
            'seguridadSocial1' => ['string'],
            'seguridadSocial2' => ['string'],
            'seguridadSocial3' => ['string'],
            'tipoSangre' => ['string'],
            //'pais' => ['string'],
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
        return User::create([
            'cedula' => $data['cedula'],
            //'nit' => $data['nit'],
            'nombre' => $data['nombre'],
            'direccion' => $data['direccion'],
            'ciudad' => $data['ciudad'],
            'correoPersonal' => $data['correoPersonal'],
            'correoEmpresarial' => $data['correoEmpresarial'],
            //'email1' => $data['email1'],
            //'email2' => $data['email2'],
            'telefono' => $data['telefono'],
            'seguridadSocial1' => $data['seguridadSocial1'],
            'seguridadSocial2' => $data['seguridadSocial2'],
            'seguridadSocial3' => $data['seguridadSocial3'],
            'tipoSangre' => $data['tipoSangre'],
            //'pais' => $data['pais'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function creates(array $data)
    {
        return User::create([
            'cedula' => $data['cedula'],
            'nit' => $data['nit'],
            'nombre' => $data['nombre'],
            'direccion' => $data['direccion'],
            'ciudad' => $data['ciudad'],
            'correoPersonal' => $data['correoPersonal'],
            'correoEmpresarial' => $data['correoEmpresarial'],
            'email1' => $data['email1'],
            'email2' => $data['email2'],
            'telefono' => $data['telefono'],
            'seguridadSocial1' => $data['seguridadSocial1'],
            'seguridadSocial2' => $data['seguridadSocial2'],
            'seguridadSocial3' => $data['seguridadSocial3'],
            'tipoSangre' => $data['tipoSangre'],
            'pais' => $data['pais'],
            'password' => Hash::make($data['password']),
        ]);
    }
}