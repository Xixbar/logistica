@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar nominación</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('nominaciones/'.$nominacion->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="clienteVendedor">Cliente vendedor</label>

                                <input id="clienteVendedor" type="text" class="form-control @error('clienteVendedor') is-invalid @enderror"
                                    name="clienteVendedor" value="{{ old('clienteVendedor', $nominacion->clienteVendedor) }}" required autocomplete="clienteVendedor">

                                @error('clienteVendedor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="clienteComprador">Cliente comprador</label>

                                <input id="clienteComprador" type="text" class="form-control @error('clienteComprador') is-invalid @enderror"
                                    name="clienteComprador" value="{{ old('clienteComprador', $nominacion->clienteComprador) }}" required autocomplete="clienteComprador">

                                @error('clienteComprador')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="numContrato">Número de contrato</label>

                                <input id="numContrato" type="text" class="form-control @error('numContrato') is-invalid @enderror"
                                    name="numContrato" value="{{ old('numContrato', $nominacion->numContrato) }}" required autocomplete="numContrato">

                                @error('numContrato')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="producto">Producto</label>

                                <input id="producto" type="text" class="form-control @error('producto') is-invalid @enderror"
                                    name="producto" value="{{ old('producto', $nominacion->producto) }}" required autocomplete="producto">

                                @error('producto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="eta">ETA</label>

                                <input id="eta" type="text" class="form-control @error('eta') is-invalid @enderror"
                                    name="eta" value="{{ old('eta', $nominacion->eta) }}" required autocomplete="eta">

                                @error('eta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="cutOff">Cut Off</label>

                                <input id="cutOff" type="text" class="form-control @error('cutOff') is-invalid @enderror"
                                    name="cutOff" value="{{ old('cutOff', $nominacion->cutOff) }}" required autocomplete="cutOff">

                                @error('cutOff')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="naviera">Naviera</label>

                                <input id="naviera" type="text" class="form-control @error('naviera') is-invalid @enderror"
                                    name="naviera" value="{{ old('naviera', $nominacion->naviera) }}" required autocomplete="naviera">

                                @error('naviera')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="motonave">Motonave</label>

                                <input id="motonave" type="text" class="form-control @error('motonave') is-invalid @enderror"
                                    name="motonave" value="{{ old('motonave', $nominacion->motonave) }}" required autocomplete="motonave">

                                @error('motonave')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="viaje">Viaje</label>

                                <input id="viaje" type="text" class="form-control @error('viaje') is-invalid @enderror"
                                    name="viaje" value="{{ old('viaje', $nominacion->viaje) }}" required autocomplete="viaje">

                                @error('viaje')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="booking">Booking</label>

                                <input id="booking" type="text" class="form-control @error('booking') is-invalid @enderror"
                                    name="booking" value="{{ old('booking', $nominacion->booking) }}" required autocomplete="booking">

                                @error('booking')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="puerto">Puerto</label>

                                <input id="puerto" type="text" class="form-control @error('puerto') is-invalid @enderror"
                                    name="puerto" value="{{ old('puerto', $nominacion->puerto) }}" required autocomplete="puerto">

                                @error('puerto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="numContainer">Número de contenedor</label>

                                <input id="numContainer" type="text" class="form-control @error('numContainer') is-invalid @enderror"
                                    name="numContainer" value="{{ old('numContainer', $nominacion->numContainer) }}" required autocomplete="numContainer">

                                @error('numContainer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="tmContainer">TM por contenedor</label>

                                <input id="tmContainer" type="text" class="form-control @error('tmContainer') is-invalid @enderror"
                                    name="tmContainer" value="{{ old('tmContainer', $nominacion->tmContainer) }}" required autocomplete="tmContainer">

                                @error('tmContainer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="unidadesContainer">Unidades por contenedor</label>

                                <input id="unidadesContainer" type="text" class="form-control @error('unidadesContainer') is-invalid @enderror"
                                    name="unidadesContainer" value="{{ old('unidadesContainer', $nominacion->unidadesContainer) }}" required autocomplete="unidadesContainer">

                                @error('unidadesContainer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="toneladas">Toneladas</label>

                                <input id="toneladas" type="text" class="form-control @error('toneladas') is-invalid @enderror"
                                    name="toneladas" value="{{ old('toneladas', $nominacion->toneladas) }}" required autocomplete="toneladas">

                                @error('toneladas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="supervision">Supervisión</label>

                                <input id="supervision" type="text" class="form-control @error('supervision') is-invalid @enderror"
                                    name="supervision" value="{{ old('supervision', $nominacion->supervision) }}" required autocomplete="supervision">

                                @error('supervision')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tipoContainer">Tipo de contenedor</label>

                                <input id="tipoContainer" type="text" class="form-control @error('tipoContainer') is-invalid @enderror"
                                    name="tipoContainer" value="{{ old('tipoContainer', $nominacion->tipoContainer) }}" required autocomplete="tipoContainer">

                                @error('tipoContainer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="instrucciones1">Instrucciones especiales 1</label>

                            <textarea id="instrucciones1" class="form-control @error('instrucciones1') is-invalid @enderror"
                                name="instrucciones1" rows="2">{{ old('instrucciones1', $nominacion->instrucciones1) }}</textarea>

                            @error('instrucciones1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="instrucciones2">Instrucciones especiales 2</label>

                            <textarea id="instrucciones1" class="form-control @error('instrucciones1') is-invalid @enderror"
                                name="instrucciones1" rows="2">{{ old('instrucciones1', $nominacion->instrucciones2) }}</textarea>

                            @error('instrucciones2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="instrucciones3">Instrucciones especiales 3</label>

                            <textarea id="instrucciones3" class="form-control @error('instrucciones3') is-invalid @enderror"
                            name="instrucciones3" rows="2">{{ old('instrucciones3', $nominacion->instrucciones3) }}</textarea>

                            @error('instrucciones3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="observacion">Observación de edición</label>

                            <textarea id="observacion" class="form-control @error('observacion') is-invalid @enderror"
                                name="observacion" rows="2">{{ old('observacion', $nominacion->observacion) }}</textarea>

                            @error('observacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href={{ url('nominaciones') }} class="btn btn-danger ml-4">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
