<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Clientes;
use Exception;
use App\Http\Request\StoreCurso;
use App\Http\Requests\StoreCliente;

class ClienteController extends Controller
{
    public function index()
    {
        $datos['clientes']=Cliente::paginate(5);
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
        $cliente->rfc = $request->rfc;
        $cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->idCiudad = $request->idCiudad;
        
        

        //return $cliente->getAttribute('edad');
        try{
            Cliente::nuevoCliente($cliente);
            return back()->with('correcto','El cliente fue agregado correctamente');
        }
        catch(Exception $e){
            //return view('clientes.create');
            return back()->with('error','Error, el cliente no pudo ser agregado');
        }
    }
}
