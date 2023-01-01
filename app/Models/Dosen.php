<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class Dosen extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nip',
        'bidang',
    ];

    protected $hidden = ['pivot'];

    // dipakai di DosenControler, index()
    // untuk filter hasil berdasarkan request name
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['name'])){
            $query->when($filters['name'] ?? false, function ($query, $name){
                return $query->where('name', 'LIKE', '%'.$name.'%');
            });
        }
    }

    public function matkul()
    {
        return $this->belongsToMany(Matkul::class);
    }

    public function getRouteKeyName()
    {
        return 'NIP';
    }
}
