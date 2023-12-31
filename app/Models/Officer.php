<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Officer extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'petugas_perpustakaan';
    protected $fillable = ['staff_id', 'nama', 'jabatan', 'nomor_telepon', 'email'];
}
