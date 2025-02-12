<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Golongan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pegawais(): HasMany
    {
        return $this->hasMany(Pegawai::class);
    }
}
