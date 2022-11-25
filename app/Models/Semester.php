<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        $user_semester = auth()->user()->semester->semester;
        if (isset($filters['semester'])){
            $query->when($filters['semester'] ?? false, function ($query, $semester){
                return $query->where('semester', '=', $semester);
            });
        }else{
            return $query->where('semester', '=', $user_semester);
        }
    }
    public function matkul()
    {
        // one to many. satu semester bisa dimiliki banyak matkul
        return $this->hasMany(Matkul::class);
    }
}
