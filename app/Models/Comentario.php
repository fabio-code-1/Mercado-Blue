<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentario';

    public function author(){
        return $this->belongsToMany(User::class, 'user_id', 'id');
    } 

}
