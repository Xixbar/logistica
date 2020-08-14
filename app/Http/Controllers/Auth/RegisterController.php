<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
//use GuzzleHttp\Psr7\Request;
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
  /*  protected function validator(array $data)
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
    protected function create(Request $request)
    {
        $validatedData = $request->validate([
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

        return User::create([
            'cedula' => $validatedData['cedula'],
            //'nit' => $validatedData['nit'],
            'nombre' => $validatedData['nombre'],
            'direccion' => $validatedData['direccion'],
            'ciudad' => $validatedData['ciudad'],
            'correoPersonal' => $validatedData['correoPersonal'],
            'correoEmpresarial' => $validatedData['correoEmpresarial'],
            //'email1' => $validatedData['email1'],
            //'email2' => $validatedData['email2'],
            'telefono' => $validatedData['telefono'],
            'seguridadSocial1' => $validatedData['seguridadSocial1'],
            'seguridadSocial2' => $validatedData['seguridadSocial2'],
            'seguridadSocial3' => $validatedData['seguridadSocial3'],
            'tipoSangre' => $validatedData['tipoSangre'],
            //'pais' => $validatedData['pais'],
            'password' => Hash::make($validatedData['password']),
        ]);
    }

    protected function creates(Request $request)
    {
        $validatedData = $request->validate([
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

        return User::create([
            'cedula' => $validatedData['cedula'],
            //'nit' => $validatedData['nit'],
            'nombre' => $validatedData['nombre'],
            'direccion' => $validatedData['direccion'],
            'ciudad' => $validatedData['ciudad'],
            'correoPersonal' => $validatedData['correoPersonal'],
            'correoEmpresarial' => $validatedData['correoEmpresarial'],
            //'email1' => $validatedData['email1'],
            //'email2' => $validatedData['email2'],
            'telefono' => $validatedData['telefono'],
            'seguridadSocial1' => $validatedData['seguridadSocial1'],
            'seguridadSocial2' => $validatedData['seguridadSocial2'],
            'seguridadSocial3' => $validatedData['seguridadSocial3'],
            'tipoSangre' => $validatedData['tipoSangre'],
            //'pais' => $validatedData['pais'],
            'password' => Hash::make($validatedData['password']),
        ]);
    }
}