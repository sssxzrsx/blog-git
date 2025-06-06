<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Tag extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'slug'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source' => 'title'
            ]
            ];
    }
}
