<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HisabKitab extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount', 'particular', 'type', 'user_id', 'profile', 'bio'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
