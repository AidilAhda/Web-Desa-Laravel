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


    // mengubah untuk default paramaeter yg di ambil id menjadi slug
    public function getRouteKeyName(){
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
