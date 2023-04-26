<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'wins',
        'losses',
        'user_id'
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
