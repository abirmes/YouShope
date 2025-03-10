<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandItem extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function command()
    {
        return $this->belongsTo(command::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
