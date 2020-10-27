<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bd extends Model
{
    use HasFactory;
    protected $table = 'clientes';

    public static function nuevoCliente($cliente)
    {
        $cliente->save();
    }

    public static function recuperarClientes()
    {
        return Cliente::paginate(5);
    }
}
