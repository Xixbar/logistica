<?php

namespace App\Http\Controllers;

use App\Contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$contratos = Contratos::where('nitCliente')
        //                       ->orWhere('nitVendedor')
         //                       ->get();
        $contratos = Contratos::all();

        return view('contratos.index', compact('contratos'));
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
            'nitCliente' => 'required|min:11|max:11|exists:users,nit',
            'nombreCliente' => 'required|min:5',
            'nitVendedor' => 'required|min:11|max:11|exists:users,nit',
            'empresaVendedora' => 'required|min:5',
            'mesEntrega' => 'required',
            'toneladas' => 'required',
            'tasaCambio' => 'required',
            'precio' => 'required',
            'prima' => 'required',
            'tipoProducto' => 'required',
            'producto' => 'required',
            'paisDestino' => 'required|min:4',
            'terminoIncoterm' => 'required',
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
        return redirect(url('contratos'))->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function show(Contratos $contrato)
    {
        return view('contratos.show', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contratos $contrato)
    {
        //$this->authorize('update', $contrato);

        return view('contratos.edit', compact('contrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contratos $contrato)
    {
        //$this->authorize('update', $contrato);

        $validatedData = $request->validate([
            'nitCliente' => 'required|min:11|max:11|exists:users,nit',
            'nombreCliente' => 'required|min:5',
            'nitVendedor' => 'required|min:11|max:11|exists:users,nit',
            'empresaVendedora' => 'required|min:5',
            'mesEntrega' => 'required',
            'toneladas' => 'required',
            'tasaCambio' => 'required',
            'precio' => 'required',
            'prima' => 'required',
            'tipoProducto' => 'required',
            'producto' => 'required',
            'paisDestino' => 'required|min:4',
            'terminoIncoterm' => 'required',
            'observacion' => 'min:8|required|string',
        ]);

        $contrato->nitCliente = $validatedData['nitCliente'];
        $contrato->nombreCliente = $validatedData['nombreCliente'];
        $contrato->nitVendedor = $validatedData['nitVendedor'];
        $contrato->empresaVendedora = $validatedData['empresaVendedora'];
        $contrato->mesEntrega = $validatedData['mesEntrega'];
        $contrato->toneladas = $validatedData['toneladas'];
        $contrato->tasaCambio = $validatedData['tasaCambio'];
        $contrato->precio = $validatedData['precio'];
        $contrato->prima = $validatedData['prima'];
        $contrato->tipoProducto = $validatedData['tipoProducto'];
        $contrato->producto = $validatedData['producto'];
        $contrato->paisDestino = $validatedData['paisDestino'];
        $contrato->terminoIncoterm = $validatedData['terminoIncoterm'];
        $contrato->observacion = $validatedData['observacion'];
        
        $contrato->save(); //Actualizar

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
