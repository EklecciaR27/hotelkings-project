<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $fillable = ['id', 'notelp', 'email', 'nama', 'jumlahkamar', 'guest_id', 'gambarktp', 'filebukti'];

    public function guest(): BelongsTo {
        return $this->belongsTo(Guest::class, 'guest_id'); }
}
