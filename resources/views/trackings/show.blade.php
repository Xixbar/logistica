@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nombre de evento: {{ $tracking->evento }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>Fecha: {{$tracking->created_at}}</li>
                        <li>Evento: {{$tracking->evento}}</li>
                        <li>Número de nominación: {{$tracking->numNominacion}}</li>
                        @if (!is_null($tracking->toneladasNominadas))
                           <li>Toneladas nominadas: {{$tracking->toneladasNominadas}}</li> 
                        @endif
                        @if (!is_null($tracking->almacenDestino))
                           <li>Almacen de destino: {{$tracking->almacenDestino}}</li> 
                        @endif
                        @if (!is_null($tracking->placaCabezote))
                            <li>Placa de cabezote: {{$tracking->placaCabezote}}</li>
                        @endif
                        @if (!is_null($tracking->numContainer))
                           <li>Número de contenedor: {{$tracking->numContainer}}</li> 
                        @endif
                        @if (!is_null($tracking->cantidad))
                           <li>Cantidad: {{$tracking->cantidad}}</li> 
                        @endif
                        @if (!is_null($tracking->observacion))
                           <li>Observación de edición: </li> 
                            <p>{{$tracking->observacion}}</p>
                        @endif
                    </ul>

                    <a href="{{ url('trackings/'.$tracking->id.'/edit') }}" class="btn btn-primary">
                        Editar evento
                    </a>
                    <a href={{ url('trackings') }} class="btn btn-danger ml-4">Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection