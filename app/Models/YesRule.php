<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YesRule extends Model
{
    use HasFactory;

    protected $table = 'yes_rules';

    /**
     * Get the user that owns the YesRule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
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
