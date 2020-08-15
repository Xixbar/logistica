@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Contratos') }}</div>

        @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif

        <div class="container">
          <div class="form-group row mb-0">
            <div class="col mt-3 ml-1">
              <a href="{{ url('contratos/create') }}" class="btn btn-primary">
                {{ __('Añadir contrato') }}
              </a>
            </div>
          </div>
        </div>
        
        <div class="card-body">
          <table class="table table-responsive" >
            <thead>
            <tr class="d-flex">
              <th class="col-sm-2">Numero de contrato</th>
              <th class="col-sm-2">Fecha de venta</th>
              <th class="col-sm-2">Nit del cliente</th>
              <th class="col-sm-2">Nombre del cliente</th>
              <th class="col-sm-2">Nit del vendedor</th>
              <th class="col-sm-2">Empresa vendedora</th>
              <th class="col-sm-2">Mes de entrega</th>
              <th class="col-sm-2">Toneladas</th>
              <th class="col-sm-2">Tasa de cambio</th>
              <th class="col-sm-2">Precio</th>
              <th class="col-sm-2">Prima</th>
              <th class="col-sm-2">Tipo de producto</th>
              <th class="col-sm-2">Producto</th>
              <th class="col-sm-2">Pais de destino</th>
              <th class="col-sm-2">Termino incoterm</th>
              <th class="col-sm-2">Acciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach($contratos as $contrato)
                <tr class="d-flex">
                  <td class="col-sm-2">{{$contrato->id}}</td>
                  <td class="col-sm-2">{{$contrato->created_at}}</td>
                  <td class="col-sm-2">{{$contrato->nitCliente }}</td>
                  <td class="col-sm-2">{{$contrato->nombreCliente}}</td>
                  <td class="col-sm-2">{{$contrato->nitVendedor}}</td>
                  <td class="col-sm-2">{{$contrato->empresaVendedora}}</td>
                  <td class="col-sm-2">{{$contrato->mesEntrega}}</td>
                  <td class="col-sm-2">{{$contrato->toneladas}}</td>
                  <td class="col-sm-2">{{$contrato->tasaCambio}}</td>
                  <td class="col-sm-2">{{$contrato->precio}}</td>
                  <td class="col-sm-2">{{$contrato->prima}}</td>
                  <td class="col-sm-2">{{$contrato->tipoProducto}}</td>
                  <td class="col-sm-2">{{$contrato->producto}}</td>
                  <td class="col-sm-2">{{$contrato->paisDestino}}</td>
                  <td class="col-sm-2">{{$contrato->terminoIncoterm}}</td>
                  <td class="col-sm-2">
                    <a href="{{ url('contratos/'.$contrato->id) }}" class="btn btn-primary mr-2">
                      Ver
                    </a>
                    <a href="{{ url('contratos/'.$contrato->id.'/edit') }}" class="btn btn-warning">
                      Editar
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