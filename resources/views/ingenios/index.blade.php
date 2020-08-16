@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Formulario ingenio') }}</div>

        @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif

        <div class="container">
          <div class="form-group row mb-0">
            <div class="col mt-3 ml-1">
              <a href="{{ url('ingenios/create') }}" class="btn btn-primary">
                {{ __('Registrar formulario') }}
              </a>
            </div>
          </div>
        </div>
        
        <div class="card-body">
        @if ($ingenios->isEmpty())            
          <p>Aún no se ha llenado ningún formulario</p>              
        @else
          <table class="table table-responsive" >
            <thead>
            <tr class="d-flex">
              <th class="col-sm-2">Fecha</th>
              <th class="col-sm-2">Hora</th>
              <th class="col-sm-2">Evento</th>
              <th class="col-sm-2">Número de nominación</th>
              <th class="col-sm-2">Ingenio</th>
              <th class="col-sm-2">Bodega</th>
              <th class="col-sm-2">Número de contenedor</th>
              <th class="col-sm-2">Placa vehículo</th>
              <th class="col-sm-2">Remolque</th>
              <th class="col-sm-2">Cédula conductor</th>
              <th class="col-sm-2">Nombre conductor</th>
              <th class="col-sm-2">Producto</th>
              <th class="col-sm-2">UMB</th>
              <th class="col-sm-2">Cédula operador montacarga</th>
              <th class="col-sm-2">Nombre operador</th>
              <th class="col-sm-2">Cédula estibador</th>
              <th class="col-sm-2">Nombre estibador</th>
              <th class="col-sm-2">Cantidad sacos</th>
              <th class="col-sm-2">Número de sello</th>
              <th class="col-sm-2">Hora inicio embalaje</th>
              <th class="col-sm-2">Hora fin embalaje</th>
              <th class="col-sm-2">Fecha salida ingenio</th>
              <th class="col-sm-2">Hora salida ingenio</th>
              <th class="col-sm-2">Acciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach($ingenios as $ingenio)
                <tr class="d-flex">
                  <td class="col-sm-2">{{$ingenio->fecha}}</td>
                  <td class="col-sm-2">{{$ingenio->hora}}</td>
                  <td class="col-sm-2">{{$ingenio->evento }}</td>
                  <td class="col-sm-2">{{$ingenio->numNominacion}}</td>
                  <td class="col-sm-2">{{$ingenio->ingenio}}</td>
                  <td class="col-sm-2">{{$ingenio->bodega}}</td>
                  <td class="col-sm-2">{{$ingenio->numContenedor}}</td>
                  <td class="col-sm-2">{{$ingenio->placaVehiculo}}</td>
                  <td class="col-sm-2">{{$ingenio->remolque}}</td>
                  <td class="col-sm-2">{{$ingenio->ccConductor}}</td>
                  <td class="col-sm-2">{{$ingenio->nombreConductor}}</td>
                  <td class="col-sm-2">{{$ingenio->producto}}</td>
                  <td class="col-sm-2">{{$ingenio->umb}}</td>
                  <td class="col-sm-2">{{$ingenio->ccOperadorMC}}</td>
                  <td class="col-sm-2">{{$ingenio->nombreOperador}}</td>
                  <td class="col-sm-2">{{$ingenio->ccEstibadores}}</td>
                  <td class="col-sm-2">{{$ingenio->nombreEstibador}}</td>
                  <td class="col-sm-2">{{$ingenio->cantidadSacos}}</td>
                  <td class="col-sm-2">{{$ingenio->numSello}}</td>
                  <td class="col-sm-2">{{$ingenio->horaInicio}}</td>
                  <td class="col-sm-2">{{$ingenio->horaFin}}</td>
                  <td class="col-sm-2">{{$ingenio->fechaSalida}}</td>
                  <td class="col-sm-2">{{$ingenio->horaSalida}}</td>
                  <td class="col-sm-2">
                    <a href="{{ url('ingenios/'.$ingenio->id) }}" class="btn btn-primary mr-2">
                      Ver
                    </a>
                    <a href="{{ url('ingenios/'.$ingenio->id.'/edit') }}" class="btn btn-warning">
                      Editar
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div>
            <h4>Historial de cambios</h4>
            @foreach ($ingenios as $ingenio)        
              @if (is_null($ingenio->observacion))
              <div class="alert alert-primary" role="alert">
              <strong>No se han registrado cambios ó ediciones para el registro con número de nominación: {{$ingenio->numNominacion}}</strong> 
              </div>
              @else
              <div class="alert alert-primary" role="alert">
                <strong>Para el formato con número de nominación: {{$ingenio->numNominacion}}</strong>
                <hr>
                <strong class="mb-0">Se realizaron las siguientes ediciones: {{$ingenio->observacion}}</strong>
              </div>
              @endif
            @endforeach
          </div>

        @endif  
        </div>
      </div>
    </div>
  </div>
</div>
@endsection