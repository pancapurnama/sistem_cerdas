<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name'
    ];


    public function yes_rule1()
    {
        return $this->hasMany(YesRule::class, 'gejala_1_id', 'id');
    }

    public function yes_rule2()
    {
        return $this->hasMany(YesRule::class, 'gejala_2_id', 'id');
    }

    public function no_rule1()
    {
        return $this->hasMany(NoRule::class, 'gejala_1_id', 'id');
    }

    public function no_rule2()
    {
        return $this->hasMany(NoRule::class, 'gejala_2_id', 'id');
    }
}
