<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Clientes;
use Exception;
use App\Http\Request\StoreCurso;
use App\Http\Requests\StoreCliente;
use App\Http\Requests\UpdateCliente;

class ClienteController extends Controller
{
    public function index()
    {
        $datos['clientes'] = Cliente::recuperar();
        return view('clientes.index',$datos);
    }
    public function create()
    {
        return view('clientes.create');
    }

    public function show()
    {
        $clientes = Cliente::all();
        return $clientes;
    }

    //recibe un form request 
    public function store(StoreCliente $request)
    {
        //$cliente = new Cliente($request->rfc,$request->nombre,$request->edad,$request->idCiudad);

        $cliente = new Cliente();
        $cliente->rfc = strtoupper($request->rfc);
        $cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->idCiudad = $request->idCiudad;

        //return $cliente->getAttribute('edad');
        try{
            Cliente::nuevo($cliente);
            return back()->with('correcto','El cliente fue agregado correctamente');
        }
        catch(Exception $e){
            return back()->with('error','Error, el cliente no pudo ser agregado');
        }
    }
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }
    public function update(UpdateCliente $request, Cliente $cliente)
    {
        $cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->idCiudad = $request->idCiudad;

        Cliente::actualizar($cliente);

        return back()->with(Cliente::getEstado(),Cliente::getMensaje());
    }
    public function destroy(Request $request,Cliente $cliente)
    {
        Cliente::elimina($cliente);
        return redirect()->back();
    }
}
