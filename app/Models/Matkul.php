<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['semester'] ?? false, function ($query, $semester){
            return $query->where('semester', '=', $semester);
        });
    }

    /*Many to Many*/
    protected $hidden = ['pivot'];
    public function dosen()
    {
        return $this->belongsToMany(Dosen::class);
    }
}
