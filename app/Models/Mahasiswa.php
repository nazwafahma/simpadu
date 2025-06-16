<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'telp',
        'email',
        'password',
        'foto',
        'id_prodi',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }
}
