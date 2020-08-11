@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contrato nuevo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('/contratos') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nitCliente">Nit del cliente</label>

                            <input id="nitCliente" type="text" class="form-control @error('nitCliente') is-invalid @enderror"
                                   name="nitCliente" value="{{ old('nitCliente') }}" required autocomplete="nitCliente">

                            @error('nitCliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
