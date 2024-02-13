<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['perangkatdesa'];
    
    public function perangkatdesa(){
        return $this->hasMany(PerangkatDesa::class);
    }
}
