<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\TryCatch;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;

    
    protected $fillable = [
        'rfc',
        'nombre',
        'edad',
        'idCiudad',
    ];

    public static function nuevoCliente($cliente)
    {   
        $cliente->save();
            
    }
    //protected $guarded = []; 

    /* private  $rfc;
    private  $nombre;
    private  $edad;
    private  $idCiudad;

    function __construct(string $rfc, string $nombre, int $edad, int $idCiudad)
    {
        $this->rfc = $rfc ;
        $this->nombre = $nombre ;
        $this->edad = $edad ;
        $this->idCiudad = $idCiudad ;
    }

    public function getRfc():string
    {
        return $this->rfc;
    }
    public function getNombre():string
    {
        return $this->nombre;
    }
    public function getEdad():int
    {
        return $this->edad;
    }
    public function getIdCiudad():int
    {
        return $this->idCiudad;
    } */
    

}

