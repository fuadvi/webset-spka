<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spka extends Model
{
    use HasFactory;

    protected $table = 'tb_dinas';

    protected $fillable = [
        'Kd_dinas', 'Nm_dinas'
    ];
}
