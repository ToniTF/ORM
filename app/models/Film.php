<?php
namespace App\Models;// namespace es la carpeta donde se encuentra el modelo
use Illuminate\Database\Eloquent\Model;

class Film extends Model {
    // Opcional: define la tabla si no sigue la convención (pluralización del nombre del modelo)
    protected $table = 'film';
    
    // Opcional: define la clave primaria si es diferente a 'id'
    protected $primaryKey = 'film_id';

    // Si tu tabla no tiene timestamps, indícalo:
    public $timestamps = false;

}
?>