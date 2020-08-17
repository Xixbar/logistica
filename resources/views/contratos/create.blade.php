@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contrato nuevo</div>

                <div class="card-body">
                    <form action="{{ url('/contratos') }}" method="POST">
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nitCliente">Nit del cliente</label>

                                <input id="nitCliente" type="text" class="form-control @error('nitCliente') is-invalid @enderror"
                                    name="nitCliente" value="{{ old('nitCliente') }}" required autocomplete="nitCliente">

                                @error('nitCliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="nombreCliente">Nombre del cliente</label>

                                <input id="nombreCliente" type="text" class="form-control @error('nombreCliente') is-invalid @enderror"
                                    name="nombreCliente" value="{{ old('nombreCliente') }}" required autocomplete="nombreCliente">

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
                                    name="nitVendedor" value="{{ old('nitVendedor') }}" required autocomplete="nitVendedor">

                                @error('nitVendedor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="empresaVendedora">Empresa vendedora</label>

                                <input id="empresaVendedora" type="text" class="form-control @error('empresaVendedora') is-invalid @enderror"
                                    name="empresaVendedora" value="{{ old('empresaVendedora') }}" required autocomplete="empresaVendedora">

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
                                    name="mesEntrega" value="{{ old('mesEntrega') }}" required autocomplete="mesEntrega">

                                @error('mesEntrega')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="toneladas">Toneladas</label>

                                <input id="toneladas" type="text" class="form-control @error('toneladas') is-invalid @enderror"
                                    name="toneladas" value="{{ old('toneladas') }}" required autocomplete="toneladas">

                                @error('toneladas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-3 mb-3">
                                <label for="tasaCambio">Tasa de cambio</label>

                                <input id="tasaCambio" type="text" class="form-control @error('tasaCambio') is-invalid @enderror"
                                    name="tasaCambio" value="{{ old('tasaCambio') }}" required autocomplete="tasaCambio">

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

                                <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror"
                                    name="precio" value="{{ old('precio') }}" required autocomplete="precio">

                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="prima">Prima</label>

                                <input id="prima" type="text" class="form-control @error('prima') is-invalid @enderror"
                                    name="prima" value="{{ old('prima') }}" required autocomplete="prima">

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
                                    <option value="Azúcar blanco">Azúcar blanco</option>
                                    <option value="Azúcar crudo">Azúcar crudo</option>
                                    <option value="Azúcar refino">Azúcar refino</option>
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
                                    <option value='Grano fino'>Grano fino</option>
                                    <option value='Grado 1'>Grado 1</option>
                                    <option value='Grado 2'>Grado 2</option>
                                    <option value='Tipo A'>Tipo A</option>
                                    <option value='Tipo B'>Tipo B</option>
                                    <option value='Tipo C'>Tipo C</option>
                                    <option value='Crudo'>Crudo</option>
                                    <option value='Orgánico'>Orgánico</option>
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
                                    name="paisDestino" required>

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
                                    <option value='FOB'>FOB</option>
                                    <option value='FCA'>FCA</option>
                                    <option value='CIF'>CIF</option>
                                    <option value='CFR'>CFR</option>
                                    <option value='EXWORK'>EXWORK</option>
                                </select>
                                
                                @error('terminoIncoterm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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
