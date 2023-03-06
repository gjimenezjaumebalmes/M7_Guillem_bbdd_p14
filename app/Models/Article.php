<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'articles';
    protected $fillable = [
        'nom',
        'descripcio',
        'color',
        'preu_compra',
        'preu_venta',
        'enviament_domicili',
        'stock',
        'obseracions'
    ];
protected $hidden =[];

protected static function newFactory(){
    return \Database\Factories\ArticleFactory::new();
}
}
