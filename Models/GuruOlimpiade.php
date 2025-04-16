<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class GuruOlimpiade extends Model
{
    public $timestamps = false;
    protected $table = 'guru_olimpiade';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'file',
        'jabatan',
        'telegram',
        'kurikulum',
       ];
}