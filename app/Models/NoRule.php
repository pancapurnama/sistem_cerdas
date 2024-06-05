<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoRule extends Model
{
    use HasFactory;

    protected $table = 'no_rules';

    public function symptom1()
    {
        return $this->belongsTo(Symptom::class, 'gejala_1_id', 'id');
    }

    public function symptom2()
    {
        return $this->belongsTo(Symptom::class, 'gejala_2_id', 'id');
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class, 'penyakit_id', 'id');
    }
}
