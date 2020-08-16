@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información de formulario del ingenio con número de nominación: {{$ingenio->numNominacion}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>Fecha: {{$ingenio->fecha}}</li>
                        <li>Hora: {{$ingenio->hora}}</li>
                        <li>Evento: {{$ingenio->evento }}</li>
                        <li>Número de nominación: {{$ingenio->numNominacion}}</li>
                        <li>Ingenio: {{$ingenio->ingenio}}</li>
                        <li>Bodega: {{$ingenio->bodega}}</li>
                        <li>Número de contenedor: {{$ingenio->numContenedor}}</li>
                        <li>Placa del vehículo: {{$ingenio->placaVehiculo}}</li>
                        <li>Remolque: {{$ingenio->remolque}}</li>
                        <li>Cédula conductor: {{$ingenio->ccConductor}}</li>
                        <li>Nombre conductor: {{$ingenio->nombreConductor}}</li>
                        <li>Producto: {{$ingenio->producto}}</li>
                        <li>UMB: {{$ingenio->umb}}</li>
                        <li>Cédula operador montecarga: {{$ingenio->ccOperadorMC}}</li>
                        <li>Nombre operador: {{$ingenio->nombreOperador}}</li>
                        <li>Cédula estibador: {{$ingenio->ccEstibadores}}</li>
                        <li>Nombre estibador: {{$ingenio->nombreEstibador}}</li>
                        <li>Cantidad de sacos: {{$ingenio->cantidadSacos}}</li>
                        <li>Número de sello: {{$ingenio->numSello}}</li>
                        <li>Hora de inicio de embalaje: {{$ingenio->horaInicio}}</li>
                        <li>Hora final de embalaje: {{$ingenio->horaFin}}</li>
                        <li>Fecha salida del ingenio: {{$ingenio->fechaSalida}}</li>
                        <li>Hora salida del ingenio: {{$ingenio->horaSalida}}</li>
                        @if (!is_null($ingenio->observacion))
                           <li>Observación de edición: </li> 
                            <p>{{$ingenio->observacion}}</p>
                        @endif
                    </ul>

                    <a href="{{ url('ingenios/'.$ingenio->id.'/edit') }}" class="btn btn-primary">
                        Editar evento
                    </a>
                    <a href={{ url('ingenios') }} class="btn btn-danger ml-4">Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection