<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_antrian', 'pasien_id', 'disease_id'
    ];


    public function disease()
    {
        return $this->belongsTo(Disease::class, 'disease_id', 'id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'pasien_id', 'id');
    }
}
