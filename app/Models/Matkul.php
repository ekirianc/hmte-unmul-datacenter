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

    public function scopeFilter($query, array $filters)
    {
        $user_semester = auth()->user()->semester;
        if (isset($filters['semester'])){
            $query->when($filters['semester'] ?? false, function ($query, $semester){
                return $query->where('semester', '=', $semester);
            });
        }else{
            return $query->where('semester', '=', $user_semester);
        }
    }

    /*Many to Many*/
    public function dosen()
    {
        return $this->belongsToMany(Dosen::class);
    }

}
