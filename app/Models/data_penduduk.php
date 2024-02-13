<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class data_penduduk extends Model
{
    use HasFactory;
    protected $guarded =['dp_id'];

    protected $primaryKey = 'dp_id';

    public function getRouteKeyName()
    {
        return 'dp_id';
    }
}
