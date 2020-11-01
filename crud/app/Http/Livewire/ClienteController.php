<?php

namespace App\Http\Livewire;

use App\Http\Requests\StoreCliente;
use Livewire\Component;
use App\Models\Cliente;
use Exception;

class ClienteController extends Component
{

    public $rfc;
    public $nombre;
    public $edad;
    public $idCiudad;

    public function render()
    {
        $clientes = Cliente::all();
        return view('livewire.cliente', compact('clientes'));
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
}
