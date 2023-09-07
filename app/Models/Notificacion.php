<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'Notificacion';
    use HasFactory;

    public function user(){
        return $this->belongsToMany('App\user','user', 'group_id')->withTimestamps();

    }
}
