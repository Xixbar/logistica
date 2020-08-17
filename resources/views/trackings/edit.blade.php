@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar evento</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('trackings/'.$tracking->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-row">
                            <div class="col mb-3">
                                <label for="evento">Evento</label>

                                <input id="evento" type="text" class="form-control @error('evento') is-invalid @enderror"
                                    name="evento" value="{{ old('evento', $tracking->evento) }}" required autocomplete="evento">

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

                                <input id="numNominacion" type="number" class="form-control @error('numNominacion') is-invalid @enderror"
                                    name="numNominacion" value="{{ old('numNominacion', $tracking->numNominacion) }}" required autocomplete="numNominacion">

                                @error('numNominacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="toneladasNominadas">Toneladas nominadas</label>

                                <input id="toneladasNominadas" type="text" class="form-control @error('toneladasNominadas') is-invalid @enderror"
                                    name="toneladasNominadas" value="{{ old('toneladasNominadas', $tracking->toneladasNominadas) }}" autocomplete="toneladasNominadas">

                                @error('toneladasNominadas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">    
                            <div class="col-md-6 mb-3">
                                <label for="almacenDestino">Almacen de destino</label>

                                <input id="almacenDestino" type="text" class="form-control @error('almacenDestino') is-invalid @enderror"
                                    name="almacenDestino" value="{{ old('almacenDestino', $tracking->almacenDestino) }}" autocomplete="almacenDestino">

                                @error('almacenDestino')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="placaCabezote">Placa cabezote</label>

                                <input id="placaCabezote" type="text" class="form-control @error('placaCabezote') is-invalid @enderror"
                                    name="placaCabezote" value="{{ old('placaCabezote', $tracking->placaCabezote) }}" autocomplete="placaCabezote">

                                @error('placaCabezote')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">                         
                            <div class="col-md-6 mb-3">
                                <label for="numContainer">Numero de contenedor</label>

                                <input id="numContainer" type="text" class="form-control @error('numContainer') is-invalid @enderror"
                                    name="numContainer" value="{{ old('numContainer', $tracking->numContainer) }}" autocomplete="numContainer">

                                @error('numContainer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="cantidad">Cantidad</label>

                                <input id="cantidad" type="double" class="form-control @error('cantidad') is-invalid @enderror"
                                    name="cantidad" value="{{ old('cantidad', $tracking->cantidad) }}" autocomplete="cantidad">

                                @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observación de edición</label>

                            <textarea id="observacion" class="form-control @error('observacion') is-invalid @enderror"
                            name="observacion" rows="2">{{ old('observacion', $tracking->observacion) }}</textarea>

                            @error('observacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href={{ url('trackings') }} class="btn btn-danger ml-4">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
