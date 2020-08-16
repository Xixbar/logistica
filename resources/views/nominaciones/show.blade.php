@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información de nominación número: {{ $nominacion->id }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>Número de nominación: {{$nominacion->id}}</li>
                        <li>Fecha de nominación: {{$nominacion->created_at}}</li>
                        <li>Nit cliente vendedor: {{$nominacion->clienteVendedor }}</li>
                        <li>Nit cliente comprador: {{$nominacion->clienteComprador}}</li>
                        <li>Producto: {{$nominacion->producto}}</li>
                        <li>ETA: {{$nominacion->eta}}</li>
                        <li>CutOff: {{$nominacion->cutOff}}</li>
                        <li>Naviera: {{$nominacion->naviera}}</li>
                        <li>Motonave: {{$nominacion->motonave}}</li>
                        <li>Viaje: {{$nominacion->viaje}}</li>
                        <li>Booking: {{$nominacion->booking}}</li>
                        <li>Puerto: {{$nominacion->puerto}}</li>
                        <li>Número de contenedor: {{$nominacion->numContainer}}</li>
                        <li>TM por contenedor: {{$nominacion->tmContainer}}</li>
                        <li>Unidades por contenedor: {{$nominacion->unidadesContainer}}</li>
                        <li>Toneladas: {{$nominacion->toneladas}}</li>
                        <li>Supervisión: {{$nominacion->supervision}}</li>
                        <li>Tipo de contenedor: {{$nominacion->tipoContainer}}</li>
                    </ul>

                    <a href="{{ url('nominaciones/'.$nominacion->id.'/edit') }}" class="btn btn-primary">
                        Editar evento
                    </a>
                    <a href={{ url('nominaciones') }} class="btn btn-danger ml-4">Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection