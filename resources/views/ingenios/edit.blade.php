@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario ingenio</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('ingenios/'.$ingenio->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="fecha">Fecha</label>

                                <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror"
                                    name="fecha" value="{{ old('fecha', $ingenio->fecha) }}" required autocomplete="fecha">

                                @error('fecha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="hora">Hora</label>

                                <input id="hora" type="time" class="form-control @error('hora') is-invalid @enderror"
                                    name="hora" value="{{ old('hora', $ingenio->hora) }}" required autocomplete="hora">

                                @error('hora')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="evento">Evento</label>

                                <input id="evento" type="text" class="form-control @error('evento') is-invalid @enderror"
                                    name="evento" value="{{ old('evento', $ingenio->evento) }}" required autocomplete="evento">

                                @error('evento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">  
                            <div class="col-md-6 mb-3">
                                <label for="numNominacion">Numero de nominación</label>

                                <input id="numNominacion" type="text" class="form-control @error('numNominacion') is-invalid @enderror"
                                    name="numNominacion" value="{{ old('numNominacion', $ingenio->numNominacion) }}" required autocomplete="numNominacion">

                                @error('numNominacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="ingenio">Ingenio</label>

                                <input id="ingenio" type="text" class="form-control @error('ingenio') is-invalid @enderror"
                                    name="ingenio" value="{{ old('ingenio', $ingenio->ingenio) }}" required autocomplete="ingenio">

                                @error('ingenio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">    
                            <div class="col-md-6 mb-3">
                                <label for="bodega">Bodega</label>

                                <input id="bodega" type="text" class="form-control @error('bodega') is-invalid @enderror"
                                    name="bodega" value="{{ old('bodega', $ingenio->bodega) }}" required autocomplete="bodega">

                                @error('bodega')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="numContenedor">Número de contenedor</label>

                                <input id="numContenedor" type="text" class="form-control @error('numContenedor') is-invalid @enderror"
                                    name="numContenedor" value="{{ old('numContenedor', $ingenio->numContenedor) }}" required autocomplete="numContenedor">

                                @error('numContenedor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="placaVehiculo">Placa del vehiculo</label>

                                <input id="placaVehiculo" type="text" class="form-control @error('placaVehiculo') is-invalid @enderror"
                                    name="placaVehiculo" value="{{ old('placaVehiculo', $ingenio->placaVehiculo) }}" required autocomplete="placaVehiculo">

                                @error('placaVehiculo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="remolque">Remolque</label>

                                <input id="remolque" type="text" class="form-control @error('remolque') is-invalid @enderror"
                                    name="remolque" value="{{ old('remolque', $ingenio->remolque) }}" required autocomplete="remolque">

                                @error('remolque')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="ccConductor">Cedula del conductor</label>

                                <input id="ccConductor" type="text" class="form-control @error('ccConductor') is-invalid @enderror"
                                    name="ccConductor" value="{{ old('ccConductor', $ingenio->ccConductor) }}" required autocomplete="ccConductor">

                                @error('ccConductor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="nombreConductor">Nombre del conductor</label>

                                <input id="nombreConductor" type="text" class="form-control @error('nombreConductor') is-invalid @enderror"
                                    name="nombreConductor" value="{{ old('nombreConductor', $ingenio->nombreConductor) }}" required autocomplete="nombreConductor">

                                @error('nombreConductor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="producto">Producto</label>

                                <input id="producto" type="text" class="form-control @error('producto') is-invalid @enderror"
                                    name="producto" value="{{ old('producto', $ingenio->producto) }}" required autocomplete="producto">

                                @error('producto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="umb">UMB</label>

                                <input id="umb" type="text" class="form-control @error('umb') is-invalid @enderror"
                                    name="umb" value="{{ old('umb', $ingenio->umb) }}" required autocomplete="umb">

                                @error('umb')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="ccOperadorMC">Cédula operador montacarga</label>

                                <input id="ccOperadorMC" type="text" class="form-control @error('ccOperadorMC') is-invalid @enderror"
                                    name="ccOperadorMC" value="{{ old('ccOperadorMC', $ingenio->ccOperadorMC) }}" required autocomplete="ccOperadorMC">

                                @error('ccOperadorMC')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="nombreOperador">Nombre del operador</label>

                                <input id="nombreOperador" type="text" class="form-control @error('nombreOperador') is-invalid @enderror"
                                    name="nombreOperador" value="{{ old('nombreOperador', $ingenio->nombreOperador) }}" required autocomplete="nombreOperador">

                                @error('nombreOperador')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="ccEstibadores">Cédula estibadores</label>

                                <input id="ccEstibadores" type="text" class="form-control @error('ccEstibadores') is-invalid @enderror"
                                    name="ccEstibadores" value="{{ old('ccEstibadores', $ingenio->ccEstibadores) }}" required autocomplete="ccEstibadores">

                                @error('ccEstibadores')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="nombreEstibador">Nombre del estibador</label>

                                <input id="nombreEstibador" type="text" class="form-control @error('nombreEstibador') is-invalid @enderror"
                                    name="nombreEstibador" value="{{ old('nombreEstibador', $ingenio->nombreEstibador) }}" required autocomplete="nombreEstibador">

                                @error('nombreEstibador')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="cantidadSacos">Cantidad de sacos</label>

                                <input id="cantidadSacos" type="text" class="form-control @error('cantidadSacos') is-invalid @enderror"
                                    name="cantidadSacos" value="{{ old('cantidadSacos', $ingenio->cantidadSacos) }}" required autocomplete="cantidadSacos">

                                @error('cantidadSacos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="numSello">Número de sello</label>

                                <input id="numSello" type="text" class="form-control @error('numSello') is-invalid @enderror"
                                    name="numSello" value="{{ old('numSello', $ingenio->numSello) }}" required autocomplete="numSello">

                                @error('numSello')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="horaInicio">Hora inicio embalaje</label>

                                <input id="horaInicio" type="time" class="form-control @error('horaInicio') is-invalid @enderror"
                                    name="horaInicio" value="{{ old('horaInicio', $ingenio->horaInicio) }}" required autocomplete="horaInicio">

                                @error('horaInicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="horaFin">Hora fin embalaje</label>

                                <input id="horaFin" type="time" class="form-control @error('horaFin') is-invalid @enderror"
                                    name="horaFin" value="{{ old('horaFin', $ingenio->horaFin) }}" required autocomplete="horaFin">

                                @error('horaFin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="fechaSalida">Fecha salida ingenio</label>

                                <input id="fechaSalida" type="date" class="form-control @error('fechaSalida') is-invalid @enderror"
                                    name="fechaSalida" value="{{ old('fechaSalida', $ingenio->fechaSalida) }}" required autocomplete="fechaSalida">

                                @error('fechaSalida')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="horaSalida">Hora salida ingenio</label>

                                <input id="horaSalida" type="time" class="form-control @error('horaSalida') is-invalid @enderror"
                                    name="horaSalida" value="{{ old('horaSalida', $ingenio->horaSalida) }}" required autocomplete="horaSalida">

                                @error('horaSalida')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="observacion">Observación de edición</label>

                            <textarea id="observacion" class="form-control @error('observacion') is-invalid @enderror"
                                name="observacion" rows="2">{{ old('observacion', $ingenio->observacion) }}</textarea>

                            @error('observacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href={{ url('ingenios') }} class="btn btn-danger ml-4">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
