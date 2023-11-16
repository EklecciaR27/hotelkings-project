<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';
    protected $fillable = ['NIK', 'nama'];

    public function reservasi(): HasMany {
        return $this->hasMany(Reservasi::class); }
}
