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
                                    name="tipoProducto" required>
                                    <option selected disabled value="">Selecciona...</option>
                                    <option value="1" {{ old('tipoProducto', $contrato->tipoProducto) == 1 ? 'selected' : '' }}>Azúcar blanco</option>
                                    <option value="2" {{ old('tipoProducto', $contrato->tipoProducto) == 2 ? 'selected' : '' }}>Azúcar crudo</option>
                                    <option value="3" {{ old('tipoProducto', $contrato->tipoProducto) == 3 ? 'selected' : '' }}>Azúcar refino</option>
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
                                    name="producto" required>
                                    <option selected disabled value="">Selecciona...</option>
                                    <option value="1" {{ old('producto', $contrato->producto) == 1 ? 'selected' : '' }}>Grano fino</option>
                                    <option value="2" {{ old('producto', $contrato->producto) == 2 ? 'selected' : '' }}>Grado 1</option>
                                    <option value="3" {{ old('producto', $contrato->producto) == 3 ? 'selected' : '' }}>Grado 2</option>
                                    <option value="4" {{ old('producto', $contrato->producto) == 4 ? 'selected' : '' }}>Tipo A</option>
                                    <option value="5" {{ old('producto', $contrato->producto) == 5 ? 'selected' : '' }}>Tipo B</option>
                                    <option value="6" {{ old('producto', $contrato->producto) == 6 ? 'selected' : '' }}>Tipo C</option>
                                    <option value="7" {{ old('producto', $contrato->producto) == 7 ? 'selected' : '' }}>Crudo</option>
                                    <option value="8" {{ old('producto', $contrato->producto) == 8 ? 'selected' : '' }}>Orgánico</option>
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
                                    name="terminoIncoterm" required>
                                    <option selected disabled value="">Selecciona...</option>
                                    <option value="1" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 1 ? 'selected' : '' }}>FOB</option>
                                    <option value="2" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 2 ? 'selected' : '' }}>FCA</option>
                                    <option value="3" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 3 ? 'selected' : '' }}>CIF</option>
                                    <option value="4" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 4 ? 'selected' : '' }}>CFR</option>
                                    <option value="5" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 5 ? 'selected' : '' }}>EXWORK</option>
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
                                name="observacion" rows="2">{{ old('observacion', $contrato->observacion) }}</textarea>

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
