@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar contrato</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('contratos/'.$contrato->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nitCliente">Nit del cliente</label>

                                <input id="nitCliente" type="text" class="form-control @error('nitCliente') is-invalid @enderror"
                                    name="nitCliente" value="{{ old('nitCliente', $contrato->nitCliente) }}" required autocomplete="nitCliente">

                                @error('nitCliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="nombreCliente">Nombre del cliente</label>

                                <input id="nombreCliente" type="text" class="form-control @error('nombreCliente') is-invalid @enderror"
                                    name="nombreCliente" value="{{ old('nombreCliente', $contrato->nombreCliente) }}" required autocomplete="nombreCliente">

                                @error('nombreCliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nitVendedor">Nit del vendedor</label>

                                <input id="nitVendedor" type="text" class="form-control @error('nitVendedor') is-invalid @enderror"
                                    name="nitVendedor" value="{{ old('nitVendedor', $contrato->nitVendedor) }}" required autocomplete="nitVendedor">

                                @error('nitVendedor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="empresaVendedora">Empresa vendedora</label>

                                <input id="empresaVendedora" type="text" class="form-control @error('empresaVendedora') is-invalid @enderror"
                                    name="empresaVendedora" value="{{ old('empresaVendedora', $contrato->empresaVendedora) }}" required autocomplete="empresaVendedora">

                                @error('empresaVendedora')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="mesEntrega">Mes de entrega</label>

                                <input id="mesEntrega" type="date" class="form-control @error('mesEntrega') is-invalid @enderror"
                                    name="mesEntrega" value="{{ old('mesEntrega', $contrato->mesEntrega) }}" required autocomplete="mesEntrega">

                                @error('mesEntrega')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="toneladas">Toneladas</label>

                                <input id="toneladas" type="double" class="form-control @error('toneladas') is-invalid @enderror"
                                    name="toneladas" value="{{ old('toneladas', $contrato->toneladas) }}" required autocomplete="toneladas">

                                @error('toneladas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-3 mb-3">
                                <label for="tasaCambio">Tasa de cambio</label>

                                <input id="tasaCambio" type="double" class="form-control @error('tasaCambio') is-invalid @enderror"
                                    name="tasaCambio" value="{{ old('tasaCambio', $contrato->tasaCambio) }}" required autocomplete="tasaCambio">

                                @error('tasaCambio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="precio">Precio</label>

                                <input id="precio" type="double" class="form-control @error('precio') is-invalid @enderror"
                                    name="precio" value="{{ old('precio', $contrato->precio) }}" required autocomplete="precio">

                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="prima">Prima</label>

                                <input id="prima" type="double" class="form-control @error('prima') is-invalid @enderror"
                                    name="prima" value="{{ old('prima', $contrato->prima) }}" required autocomplete="prima">

                                @error('prima')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="tipoProducto">Tipo de producto</label>

                                <select id="tipoProducto" type="custom-select" class="form-control @error('tipoProducto') is-invalid @enderror"
                                    name="tipoProducto" value="{{ old('tipoProducto', $contrato->tipoProducto) }}" required autocomplete="tipoProducto">
                                    <option selected disabled value="">Selecciona...</option>
                                    <option>Azúcar blanco</option>
                                    <option>Azúcar crudo</option>
                                    <option>Azúcar refino</option>
                                </select>

                                @error('tipoProducto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="producto">Producto</label>

                                <select id="producto" type="custom-select" class="form-control @error('producto') is-invalid @enderror"
                                    name="producto" value="{{ old('producto', $contrato->producto) }}" required autocomplete="producto">
                                    <option selected disabled value="">Selecciona...</option>
                                    <option>Grano fino</option>
                                    <option>Grado 1</option>
                                    <option>Grado 2</option>
                                    <option>Tipo A</option>
                                    <option>Tipo B</option>
                                    <option>Tipo C</option>
                                    <option>Crudo</option>
                                    <option>Orgánico</option>
                                </select>

                                @error('producto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="paisDestino">Pais de destino</label>

                                <input id="paisDestino" type="text" class="form-control @error('paisDestino') is-invalid @enderror"
                                    name="paisDestino" value="{{ old('paisDestino', $contrato->paisDestino) }}" required autocomplete="paisDestino">

                                @error('paisDestino')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="terminoIncoterm">Termino Incoterm</label>

                                <select id="terminoIncoterm" type="custom-select" class="form-control @error('terminoIncoterm') is-invalid @enderror"
                                    name="terminoIncoterm" value="{{ old('terminoIncoterm', $contrato->terminoIncoterm) }}" required autocomplete="terminoIncoterm">
                                    <option selected disabled value="">Selecciona...</option>
                                    <option>FOB</option>
                                    <option>FCA</option>
                                    <option>CIF</option>
                                    <option>CFR</option>
                                    <option>EXWORK</option>
                                </select>
                                
                                @error('terminoIncoterm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="observacion">Observación de edición</label>

                            <textarea id="observacion" class="form-control @error('observacion') is-invalid @enderror"
                                name="observacion" value="{{ old('observacion') }}" rows="2" required autocomplete="observacion"></textarea>

                            @error('observacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Completar</button>
                        <a href={{ url('contratos') }} class="btn btn-danger ml-4">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
