<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class GuruEkstra extends Model
{
    public $timestamps = false;
    protected $table = 'guruekstra';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'foto',
        'foto',
        'bidang',
        'tahun',
        'tele',
        'email',
        'wa',
       ];
}