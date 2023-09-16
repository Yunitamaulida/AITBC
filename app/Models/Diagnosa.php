<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'jenis_kelamin',
        'bb',
        'bt',
        'alamat',
        'gejala_terpilih',
        'penyakit',
        'persentase',
    ];
}
