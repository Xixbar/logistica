<?php

namespace App\Http\Controllers;

use App\Contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contratos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nitCliente' => 'required|min:11',
            'nombreCliente' => 'required',
            'nitVendedor ' => 'required|min:11',
            'empresaVendedora' => 'required',
            'mesEntrega' => 'required',
            'toneladas' => 'required',
            'tasaCambio' => 'required',
            'precio' => 'required',
            'prima' => 'required',
            'tipoProducto' => 'required',
            'producto' => 'required',
            'paisDestino' => 'required',
            'terminoIncoterm' => 'required'
        ]);

        $contratos = new Contratos();
        $contratos->nitCliente = $validatedData['nitCliente'];
        $contratos->nombreCliente = $validatedData['nombreCliente'];
        $contratos->nitVendedor = $validatedData['nitVendedor'];
        $contratos->empresaVendedora = $validatedData['empresaVendedora'];
        $contratos->mesEntrega = $validatedData['mesEntrega'];
        $contratos->toneladas = $validatedData['toneladas'];
        $contratos->tasaCambio = $validatedData['tasaCambio'];
        $contratos->precio = $validatedData['precio'];
        $contratos->prima = $validatedData['prima'];
        $contratos->tipoProducto = $validatedData['tipoProducto'];
        $contratos->producto = $validatedData['producto'];
        $contratos->paisDestino = $validatedData['paisDestino'];
        $contratos->terminoIncoterm = $validatedData['terminoIncoterm'];
        
        $contratos->save(); //Insertar

        $status = 'El contrato ha sido realizado exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function show(Contratos $contratos)
    {
        return view('contratos.show', compact('contratos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contratos $contratos)
    {
        $this->authorize('update', $contratos);

        return view('contratos.edit', compact('contratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contratos $contratos)
    {
        $this->authorize('update', $contratos);

        $validatedData = $request->validate([
            'nitCliente' => 'required|min:11',
            'nombreCliente' => 'required',
            'nitVendedor ' => 'required|min:11',
            'empresaVendedora' => 'required',
            'mesEntrega' => 'required',
            'toneladas' => 'required',
            'tasaCambio' => 'required',
            'precio' => 'required',
            'prima' => 'required',
            'tipoProducto' => 'required',
            'producto' => 'required',
            'paisDestino' => 'required',
            'terminoIncoterm' => 'required|min:3'
        ]);

        $contratos = new Contratos();
        $contratos->nitCliente = $validatedData['nitCliente'];
        $contratos->nombreCliente = $validatedData['nombreCliente'];
        $contratos->nitVendedor = $validatedData['nitVendedor'];
        $contratos->empresaVendedora = $validatedData['empresaVendedora'];
        $contratos->mesEntrega = $validatedData['mesEntrega'];
        $contratos->toneladas = $validatedData['toneladas'];
        $contratos->tasaCambio = $validatedData['tasaCambio'];
        $contratos->precio = $validatedData['precio'];
        $contratos->prima = $validatedData['prima'];
        $contratos->tipoProducto = $validatedData['tipoProducto'];
        $contratos->producto = $validatedData['producto'];
        $contratos->paisDestino = $validatedData['paisDestino'];
        $contratos->terminoIncoterm = $validatedData['terminoIncoterm'];
        
        $contratos->save(); //Actualizar

        $status = 'El contrato ha sido actualizado exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contratos $contratos)
    {
        //
    }
}
