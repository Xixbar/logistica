@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Nominaciones') }}</div>

        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
        
        <div class="container">
          <div class="form-group row mb-0">
            <div class="col mt-3 ml-1">
              <a href="{{ url('nominaciones/create') }}" class="btn btn-primary">
                {{ __('Añadir nominación') }}
              </a>
            </div>
          </div>
        </div>

        <div class="card-body">
        @if ($nominaciones->isEmpty())             
          <p>Aún no se ha registrado ninguna nominación.</p>              
        @else
          <table class="table table-responsive" >
            <thead>
            <tr class="d-flex">
              <th class="col-sm-2">Número de nominación</th>
              <th class="col-sm-2">Fecha de nominación</th>
              <th class="col-sm-2">Cliente vendedor</th>
              <th class="col-sm-2">Cliente comprador</th>
              <th class="col-sm-2">Producto</th>
              <th class="col-sm-2">ETA</th>
              <th class="col-sm-2">Cut Off</th>
              <th class="col-sm-2">Naviera</th>
              <th class="col-sm-2">Motonave</th>
              <th class="col-sm-2">Viaje</th>
              <th class="col-sm-2">Booking</th>
              <th class="col-sm-2">Puerto</th>
              <th class="col-sm-2">Número de contenedor</th>
              <th class="col-sm-2">TM por contenedor</th>
              <th class="col-sm-2">Unidades por contenedor</th>
              <th class="col-sm-2">Toneladas</th>
              <th class="col-sm-2">Supervisión</th>
              <th class="col-sm-2">Tipo de contenedor</th>
              <th class="col-sm-2">Acciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach($nominaciones as $nominacion)
                <tr class="d-flex">
                  <td class="col-sm-2">{{$nominacion->id}}</td>
                  <td class="col-sm-2">{{$nominacion->created_at}}</td>
                  <td class="col-sm-2">{{$nominacion->clienteVendedor }}</td>
                  <td class="col-sm-2">{{$nominacion->clienteComprador}}</td>
                  <td class="col-sm-2">{{$nominacion->producto}}</td>
                  <td class="col-sm-2">{{$nominacion->eta}}</td>
                  <td class="col-sm-2">{{$nominacion->cutOff}}</td>
                  <td class="col-sm-2">{{$nominacion->naviera}}</td>
                  <td class="col-sm-2">{{$nominacion->motonave}}</td>
                  <td class="col-sm-2">{{$nominacion->viaje}}</td>
                  <td class="col-sm-2">{{$nominacion->booking}}</td>
                  <td class="col-sm-2">{{$nominacion->puerto}}</td>
                  <td class="col-sm-2">{{$nominacion->numContainer}}</td>
                  <td class="col-sm-2">{{$nominacion->tmContainer}}</td>
                  <td class="col-sm-2">{{$nominacion->unidadesContainer}}</td>
                  <td class="col-sm-2">{{$nominacion->toneladas}}</td>
                  <td class="col-sm-2">{{$nominacion->supervision}}</td>
                  <td class="col-sm-2">{{$nominacion->tipoContainer}}</td>
                  <td class="col-sm-2">
                    <a href="{{ url('nominaciones/'.$nominacion->id) }}" class="btn btn-primary mr-2">
                      Ver
                    </a>
                    <a href="{{ url('nominaciones/'.$nominacion->id.'/edit') }}" class="btn btn-warning">
                      Editar
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div>
            <h4>Historial de cambios</h4>
            @foreach ($nominaciones as $nominacion)        
              @if (is_null($nominacion->observacion))
              <div class="alert alert-primary" role="alert">
              <strong>No se han registrado cambios ó ediciones para el registro con número de nominación: {{$nominacion->id}}</strong> 
              </div>
              @else
              <div class="alert alert-primary" role="alert">
                <strong>Para la nominación con número de indentificación: {{$nominacion->id}}</strong>
                <hr>
                <strong class="mb-0">Se realizaron las siguientes ediciones: {{$nominacion->observacion}}</strong>
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