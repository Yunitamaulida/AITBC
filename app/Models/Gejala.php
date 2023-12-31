<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
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
        'bobot',
    ];

    public function kasus(): BelongsTo
    {
        return $this->belongsTo(Kasus::class);
    }
}
