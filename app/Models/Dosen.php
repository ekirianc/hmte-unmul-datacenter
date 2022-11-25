<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;protected $fillable = [
        'name',
        'nip',
        'bidang',
    ];

    public function matkul()
    {
        return $this->belongsToMany(Matkul::class);
    }

}
