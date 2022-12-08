<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\http\Request;

class Matkul extends Model
{
    use HasFactory, Sluggable;

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


    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*https://github.com/cviebrock/eloquent-sluggable*/
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
