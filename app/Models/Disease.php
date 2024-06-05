<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $table = 'diseases';

    protected $fillable = [
        'code', 'name'
    ];


    public function yes_rule()
    {
        return $this->hasMany(YesRule::class, 'penyakit_id', 'id');
    }

    public function no_rule()
    {
        return $this->hasMany(NoRule::class, 'penyakit_id', 'id');
    }
}
