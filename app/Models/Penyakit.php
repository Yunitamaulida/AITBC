<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Penyakit extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kode',
        'name',
        'deskipsi',
        'solusi',
    ];

    public function kasuses() : HasMany{
        return $this->hasMany(Kasus::class,"penyakit","kode");
    }

    public function gejalas(): HasManyThrough
    {
        return $this->hasManyThrough(Gejala::class, Kasus::class,"penyakit","kode","kode","gejala");
    }
}
