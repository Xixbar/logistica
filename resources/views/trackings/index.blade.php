@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Trackings') }}</div>

        <div class="container">
          <div class="form-group row mb-0">
            <div class="col mt-3 ml-1">
              <a href="{{ url('trackings/create') }}" class="btn btn-primary">
                {{ __('Añadir evento') }}
              </a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <table class="table table-responsive" >
            <thead>
            <tr class="d-flex">
              <th class="col-sm-2">Fecha</th>
              <th class="col-sm-2">Evento</th>
              <th class="col-sm-2">Numero de nominación</th>
              <th class="col-sm-2">Toneladas nominadas</th>
              <th class="col-sm-2">Almacen de destino</th>
              <th class="col-sm-2">Placa de cabezote</th>
              <th class="col-sm-2">Numero de contenedor</th>
              <th class="col-sm-2">Cantidad</th>
              <th class="col-sm-2">Acciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach($trackings as $tracking)
                <tr class="d-flex">
                  <td class="col-sm-2">{{$tracking->created_at}}</td>
                  <td class="col-sm-2">{{$tracking->evento}}</td>
                  <td class="col-sm-2">{{$tracking->numNominacion}}</td>
                  <td class="col-sm-2">{{$tracking->toneladasNominadas}}</td>
                  <td class="col-sm-2">{{$tracking->almacenDestino}}</td>
                  <td class="col-sm-2">{{$tracking->placaCabezote}}</td>
                  <td class="col-sm-2">{{$tracking->numContainer}}</td>
                  <td class="col-sm-2">{{$tracking->cantidad}}</td>
                  <td>
                    <a href="{{ url('/trackings/'.$tracking->id.'/edit') }}" class="btn btn-primary">
                      Edit entry
                  </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection