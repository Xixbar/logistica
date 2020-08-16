@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registro empleados') }}</div>
            
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="cedula">{{ __('Cédula') }}</label>
                                <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>
            
                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nombre">{{ __('Nombre') }}</label>
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
            
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="direccion">{{ __('Dirección') }}</label>
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
            
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="ciudad">{{ __('Ciudad de residencia') }}</label>
                                <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>
            
                                @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="correoIngreso">{{ __('Correo ingreso/Correo personal') }}</label>
                                <input id="correoIngreso" type="email" class="form-control @error('correoIngreso') is-invalid @enderror" name="correoIngreso" value="{{ old('correoIngreso') }}" required autocomplete="correoIngreso" autofocus>
            
                                @error('correoIngreso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="correoEmpresarial">{{ __('Correo empresarial') }}</label>
                                <input id="correoEmpresarial" type="email" class="form-control @error('correoEmpresarial') is-invalid @enderror" name="correoEmpresarial" value="{{ old('correoEmpresarial') }}" required autocomplete="correoEmpresarial" autofocus>
            
                                @error('correoEmpresarial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="telefono">{{ __('Telefono personal') }}</label>
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
            
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tipoSangre">{{ __('Tipo de sangre') }}</label>
                                <input id="tipoSangre" type="text" class="form-control @error('tipoSangre') is-invalid @enderror" name="tipoSangre" value="{{ old('tipoSangre') }}" required autocomplete="tipoSangre" autofocus>
            
                                @error('tipoSangre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col">
                                <label for="seguridadSocial1">{{ __('Seguridad social 1') }}</label>
                                <input id="seguridadSocial1" type="text" class="form-control @error('seguridadSocial1') is-invalid @enderror" name="seguridadSocial1" value="{{ old('seguridadSocial1') }}" required autocomplete="seguridadSocial1" autofocus>
            
                                @error('seguridadSocial1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="seguridadSocial2">{{ __('Seguridad social 2') }}</label>
                                <input id="seguridadSocial2" type="text" class="form-control @error('seguridadSocial2') is-invalid @enderror" name="seguridadSocial2" value="{{ old('seguridadSocial2') }}" required autocomplete="seguridadSocial2" autofocus>
            
                                @error('seguridadSocial2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="seguridadSocial3">{{ __('Seguridad social 3') }}</label>
                                <input id="seguridadSocial3" type="text" class="form-control @error('seguridadSocial3') is-invalid @enderror" name="seguridadSocial3" value="{{ old('seguridadSocial3') }}" required autocomplete="seguridadSocial3" autofocus>
            
                                @error('seguridadSocial3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
            
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registro empresas') }}</div>
            
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="nit">{{ __('Nit') }}</label>
                                <input id="nit" type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{ old('nit') }}" required autocomplete="nit" autofocus>
            
                                @error('nit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nombre">{{ __('Nombre') }}</label>
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
            
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="direccion">{{ __('Dirección') }}</label>
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
            
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="ciudad">{{ __('Ciudad') }}</label>
                                <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>
            
                                @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="correoIngreso">{{ __('Correo ingreso') }}</label>
                                <input id="correoIngreso" type="email" class="form-control @error('correoIngreso') is-invalid @enderror" name="correoIngreso" value="{{ old('correoIngreso') }}" required autocomplete="correoIngreso" autofocus>
            
                                @error('correoIngreso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email2">{{ __('Correo electrónico 2') }}</label>
                                <input id="email2" type="email" class="form-control @error('email2') is-invalid @enderror" name="email2" value="{{ old('email2') }}" required autocomplete="email2" autofocus>
            
                                @error('email2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="telefono">{{ __('Telefono') }}</label>
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
            
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="pais">{{ __('Pais') }}</label>
                                <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais" value="{{ old('pais') }}" required autocomplete="pais" autofocus>
            
                                @error('pais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
            
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection