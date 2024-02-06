<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory,Sluggable;
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
{
    return 'slug';
}

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
   
    
}
