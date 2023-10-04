<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    protected $table = 'konsultasis';
    protected $guarded = ['id'];
    protected $fillable = ['nama','domisili','tgl','no_telepon', 'keluhan', 'lama_keluhan'];
}
