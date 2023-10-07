<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'family';
    protected $primaryKey = 'no_kk';
    // Relasi dengan tabel people
    public function people()
    {
        return $this->hasMany(People::class, 'no_kk', 'no_kk');
    }
}
