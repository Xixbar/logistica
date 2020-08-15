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
            'cedula' => ['unique:users','nullable'],
            'nit' => ['unique:users','nullable'],
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string'],
            'ciudad' => ['required', 'string'],
            'correoPersonal' => ['string', 'email', 'unique:users','nullable'],
            'correoEmpresarial' => [ 'string', 'email','nullable'],
            'email1' => ['string', 'email', 'unique:users','nullable'],
            'email2' => ['string', 'email', 'unique:users','nullable'],
            'telefono' => ['required', 'string'],
            'seguridadSocial1' => ['string','nullable'],
            'seguridadSocial2' => ['string','nullable'],
            'seguridadSocial3' => ['string','nullable'],
            'tipoSangre' => ['string','nullable'],
            'pais' => ['string','nullable'],
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
    {/*
        return User::create([
            
            'cedula' => isset($data['cedula'])?'cedula': NULL,
            'nit' => isset($data['nit'])?'nit': NULL,
            'nombre' => $data['nombre'],
            'direccion' => $data['direccion'],
            'ciudad' => $data['ciudad'],
            'correoPersonal' => isset($data['correoPersonal'])?'correoPersonal': NULL,
            'correoEmpresarial' => isset($data['correoEmpresarial'])?'correoEmpresarial': NULL,
            'email1' => isset($data['email1'])?'email1': NULL,
            'email2' => isset($data['email2'])?'email2': NULL,
            'telefono' => $data['telefono'],
            'seguridadSocial1' => isset($data['seguridadSocial1'])?'seguridadSocial1': NULL,
            'seguridadSocial2' => isset($data['seguridadSocial2'])?'seguridadSocial2': NULL,
            'seguridadSocial3' => isset($data['seguridadSocial3'])?'seguridadSocial3': NULL,
            'tipoSangre' => isset($data['tipoSangre'])?'tipoSangre': NULL,
            'pais' => isset($data['pais'])?'pais': NULL,
            'password' => Hash::make($data['password']),
        ]);
*/

        $usuario = new User();

        if(isset($data["cedula"])){
            $usuario->cedula = $data["celuda"];  
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

        if(isset($data["correoPersonal"])){
            $usuario->correoPersonal = $data['correoPersonal'];
        } else{
            $usuario->correoPersonal = NULL;
        } 
        if(isset($data["correoEmpresarial"])){
            $usuario->correoEmpresarial = $data['correoEmpresarial'];
        } else{
            $usuario->correoEmpresarial = NULL;
        } 
        if(isset($data["email1"])){
            $usuario->email1 = $data['email1'];
        } else{
            $usuario->email1 = NULL;
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

        /*
        return $usuario::create([
            'cedula' => $usuario['cedula'],
            'nit' => $usuario['nit'],
            'nombre' => $usuario['nombre'],
            'direccion' => $usuario['direccion'],
            'ciudad' => $usuario['ciudad'],
            'correoPersonal' => $usuario['correoPersonal'],
            'correoEmpresarial' => $usuario['correoEmpresarial'],
            'email1' => $usuario['email1'],
            'email2' => $usuario['email2'],
            'telefono' => $usuario['telefono'],
            'seguridadSocial1' => $usuario['seguridadSocial1'],
            'seguridadSocial2' => $usuario['seguridadSocial2'],
            'seguridadSocial3' => $usuario['seguridadSocial3'],
            'tipoSangre' => $usuario['tipoSangre'],
            'pais' => $usuario['pais'],
            'password' => $usuario['password'],
        ]);
        */
     }
}