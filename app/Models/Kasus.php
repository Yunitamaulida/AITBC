<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kasus extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'penyakit',
        'gejala',
        'bobot',
    ];

    public function gejalas() : HasMany{
        return $this->hasMany(Gejala::class,"kode","gejala");
    }

    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(Penyakit::class);
    }
}
