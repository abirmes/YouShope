<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    public function CommandItem()
    {
        return $this->hasMany(CommandItem::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
