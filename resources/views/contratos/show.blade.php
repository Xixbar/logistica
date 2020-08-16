@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información de contrato número: {{ $contrato->id }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>{{$contrato->id}}</li>
                        <li>{{$contrato->created_at}}</li>
                        <li>{{$contrato->nitCliente }}</li>
                        <li>{{$contrato->nombreCliente}}</li>
                        <li>{{$contrato->nitVendedor}}</li>
                        <li>{{$contrato->empresaVendedora}}</li>
                        <li>{{$contrato->mesEntrega}}</li>
                        <li>{{$contrato->toneladas}}</li>
                        <li>{{$contrato->tasaCambio}}</li>
                        <li>{{$contrato->precio}}</li>
                        <li>{{$contrato->prima}}</li>
                        <li>{{$contrato->tipoProducto}}</li>
                        <li>{{$contrato->producto}}</li>
                        <li>{{$contrato->paisDestino}}</li>
                        <li>{{$contrato->terminoIncoterm}}</li>
                    </ul>

                    <a href="{{ url('contratos/'.$contrato->id.'/edit') }}" class="btn btn-primary">
                        Editar evento
                    </a>
                    <a href={{ url('contratos') }} class="btn btn-danger ml-4">Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection