<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'prix',
        'image',
        'categorie_id'
    ];

    
    public function categorie(){
        return $this->hasOne(Categorie::class);
    }

    public function commandItem(){
        return $this->hasMany(CommandItem::class);
    }
}
