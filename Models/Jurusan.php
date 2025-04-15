<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Jurusan extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'profil',
        'jurusan',
        'status',
    ];
}