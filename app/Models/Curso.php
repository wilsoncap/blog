<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description', 'categoria'];// campos para ser tenidos en cuenta, los demas los ignora
    protected $guarded = ['status'];//campos protegidos y puedes usar los demas


    public function getRouteKeyName()
    {
        return "slug";
    }
}
