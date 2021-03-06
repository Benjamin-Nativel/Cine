<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'resume','id_real','duree','image'];
    public function real()
{
    return $this->belongsTo(Realisateurs::class, 'id_real');
}
public function categ()
{
    return $this->belongsToMany(Categories::class,'film_categ', 'id_film', 'id_categ');
}
}
