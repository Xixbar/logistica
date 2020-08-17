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
                                    <option value="Azúcar blanco" {{ old('tipoProducto', $contrato->tipoProducto) == 'Azúcar blanco' ? 'selected' : '' }}>Azúcar blanco</option>
                                    <option value="Azúcar crudo" {{ old('tipoProducto', $contrato->tipoProducto) == 'Azúcar crudo' ? 'selected' : '' }}>Azúcar crudo</option>
                                    <option value="Azúcar refino" {{ old('tipoProducto', $contrato->tipoProducto) == 'Azúcar refino' ? 'selected' : '' }}>Azúcar refino</option>
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
                                    <option value="Grano fino" {{ old('producto', $contrato->producto) == 'Grano fino' ? 'selected' : '' }}>Grano fino</option>
                                    <option value="Grado 1" {{ old('producto', $contrato->producto) == 'Grado 1' ? 'selected' : '' }}>Grado 1</option>
                                    <option value="Grado 2" {{ old('producto', $contrato->producto) == 'Grado 2' ? 'selected' : '' }}>Grado 2</option>
                                    <option value="Tipo A" {{ old('producto', $contrato->producto) == 'Tipo A' ? 'selected' : '' }}>Tipo A</option>
                                    <option value="Tipo B" {{ old('producto', $contrato->producto) == 'Tipo B' ? 'selected' : '' }}>Tipo B</option>
                                    <option value="Tipo C" {{ old('producto', $contrato->producto) == 'Tipo C' ? 'selected' : '' }}>Tipo C</option>
                                    <option value="Crudo" {{ old('producto', $contrato->producto) == 'Crudo' ? 'selected' : '' }}>Crudo</option>
                                    <option value="Orgánico" {{ old('producto', $contrato->producto) == 'Orgánico' ? 'selected' : '' }}>Orgánico</option>
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
                                    <option value="FOB" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 'FOB' ? 'selected' : '' }}>FOB</option>
                                    <option value="FCA" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 'FCA' ? 'selected' : '' }}>FCA</option>
                                    <option value="CIF" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 'CIF' ? 'selected' : '' }}>CIF</option>
                                    <option value="CFR" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 'CFR' ? 'selected' : '' }}>CFR</option>
                                    <option value="EXWORK" {{ old('terminoIncoterm', $contrato->terminoIncoterm) == 'EXWORK' ? 'selected' : '' }}>EXWORK</option>
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

                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href={{ url('contratos') }} class="btn btn-danger ml-4">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
