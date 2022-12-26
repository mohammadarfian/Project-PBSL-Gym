<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
//     use HasFactory;
//     protected $table = 'pakets';
//     protected $fillable = [
//         'id_member',
//         'id_coach',
//         'nama',
//         'jenis',
//     ];
        use HasFactory;
        protected $fillable = ['id_member', 'id_coach', 'nama', 'jenis'];
}
