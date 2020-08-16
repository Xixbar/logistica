<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use GuzzleHttp\Psr7\Request;    
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
            'cedula' => ['min:10','max:10','unique:users','nullable'],
            'nit' => ['min:11','max:11','unique:users','nullable'],
            'nombre' => ['min:5','required', 'string'],
            'direccion' => ['min:10','required', 'string'],
            'ciudad' => ['min:4','required', 'string'],
            'correoIngreso' => ['string', 'email', 'unique:users'],
            'correoEmpresarial' => [ 'string', 'email','nullable'],
            'email2' => ['string', 'email', 'unique:users','nullable'],
            'telefono' => ['min:7','required', 'string'],
            'seguridadSocial1' => ['min:7','string','nullable'],
            'seguridadSocial2' => ['min:7','string','nullable'],
            'seguridadSocial3' => ['min:7','string','nullable'],
            'tipoSangre' => ['min:7','max:3','string','nullable'],
            'pais' => ['min:4','string','nullable'],
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
        $usuario = new User();

        if(isset($data["cedula"])){
            $usuario->cedula = $data["cedula"];  
        } else{
            $usuario->cedula = NULL;
        }
        if(isset($data["nit"])){
            $usuario->nit = $data['nit'];
        } else{
            $usuario->nit = NULL;
        }   

        $usuario->nombre = $data['nombre'];
        $usuario->direccion = $data['direccion'];
        $usuario->ciudad = $data['ciudad'];
        $usuario->correoIngreso = $data['correoIngreso'];

        if(isset($data["correoEmpresarial"])){
            $usuario->correoEmpresarial = $data['correoEmpresarial'];
        } else{
            $usuario->correoEmpresarial = NULL;
        } 
        if(isset($data["email2"])){
            $usuario->email2 = $data['email2'];
        } else{
            $usuario->email2 = NULL;
        } 

        $usuario->telefono = $data['telefono'];

        if(isset($data["seguridadSocial1"])){
            $usuario->seguridadSocial1 = $data['seguridadSocial1'];
        } else{
            $usuario->seguridadSocial1 = NULL;
        } 
        if(isset($data["seguridadSocial2"])){
            $usuario->seguridadSocial2 = $data['seguridadSocial2'];
        } else{
            $usuario->seguridadSocial2 = NULL;
        } 
        if(isset($data["seguridadSocial3"])){
            $usuario->seguridadSocial3 = $data['seguridadSocial3'];
        } else{
            $usuario->seguridadSocial3 = NULL;
        } 
        if(isset($data["tipoSangre"])){
            $usuario->tipoSangre = $data['tipoSangre'];
        } else{
            $usuario->tipoSangre = NULL;
        } 
        if(isset($data["pais"])){
            $usuario->pais = $data['pais'];
        } else{
            $usuario->pais = NULL;
        } 

        $usuario->password = Hash::make($data['password']);

        $usuario->save();

        return $usuario;
     }
}