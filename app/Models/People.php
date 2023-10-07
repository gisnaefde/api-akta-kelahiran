<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $primaryKey = 'nik';

    public function family()
    {
        return $this->belongsTo(Family::class, 'no_kk', 'no_kk');
    }
}
