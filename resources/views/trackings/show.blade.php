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
                        <li>Numero de nominación: {{$tracking->numNominacion}}</li>
                        <li>Toneladas nominadas: {{$tracking->toneladasNominadas}}</li>
                        <li>Almacen de destino: {{$tracking->almacenDestino}}</li>
                        <li>Placa de cabezote: {{$tracking->placaCabezote}}</li>
                        <li>Numero de contenedor: {{$tracking->numContainer}}</li>
                        <li>Cantidad: {{$tracking->cantidad}}</li>
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