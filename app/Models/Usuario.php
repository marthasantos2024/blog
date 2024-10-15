<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $tabla = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'correo', 'contraseña', 'categoria'];
}