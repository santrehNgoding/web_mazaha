<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Ekstra extends Model
{
    public $timestamps = false;
    protected $table = 'ekstrakulikuler';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'id_guru1',
        'id_guru2',
        'foto',
        'deskripsi',
       ];
}