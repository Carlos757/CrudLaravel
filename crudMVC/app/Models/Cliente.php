<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'rfc';
    protected $keyType = 'string';

    public static function recuperar()
    {
        return Self::paginate(5);
   
    }
    public static function buscar($busqueda)
    {
        return Self::where('nombre', 'like', '%'.$busqueda.'%')
                    ->orWhere('rfc', 'like', '%'.$busqueda.'%')->paginate(5);
   
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
            return true;
        }
        return false; 
    }
    public static function elimina($cliente)
    {
        $cliente->delete();
    }


    /* protected $fillable = [
        'rfc',
        'nombre',
        'edad',
        'idCiudad',
    ]; */
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