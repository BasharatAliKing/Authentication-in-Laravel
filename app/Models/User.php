<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory,Notifiable;
    public $timestamps=false;
    protected $guarded=[];
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden=[
        'password',
        'remembar_token',
      ];
    protected function casts():array{
        return[
            'password'=>'hashed',
        ];
      
    }
}
