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
    protected $primaryKey = 'rfc';
    protected $keyType = 'string';
    private static $estado;
    private static $mensaje;

    protected $fillable = [
        'rfc',
        'nombre',
        'edad',
        'idCiudad',
    ];

    public static function recuperar()
    {
        return Cliente::paginate(8);
        
    }
    public static function nuevo($cliente)
    {   
        $cliente->save();   
    }
    public static function actualizar($cliente)
    {   
        if($cliente->isDirty())
        {
            $cliente->save();   
            self::$estado = 'correcto';
            self::$mensaje = 'El cliente fue actualizado correctamente';
            return;
        }
        self::$estado = 'advertencia';
        self::$mensaje = 'No se realizaron cambios';
        return; 
    }
    public static function elimina($cliente)
    {
        $cliente->delete();
    }

    public static function getEstado(){
        return self::$estado;
    }
    public static function getMensaje(){
        return self::$mensaje;
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