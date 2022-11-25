<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matkul extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    /*relasi ke tabel matkul ke semester, diapanggil di route*/
    public function semester()
    {
        // one to one, satu matkul cuma bisa satu semester
        return $this->belongsTo(Semester::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class);
    }

}
