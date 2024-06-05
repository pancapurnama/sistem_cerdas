<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_antrian', 'pasien_id', 'symptom_id'
    ];


    public function gejala()
    {
        return $this->belongsTo(Symptom::class, 'symptom_id', 'id');
    }
}
