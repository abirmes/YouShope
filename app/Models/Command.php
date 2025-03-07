<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
    ];

    public function CommandItem()
    {
        return $this->hasMany(CommandItem::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
