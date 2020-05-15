<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    protected static function booted()
    {
        static::created(function ($user) {
            $user->slug = str_slug($user->title);
        });
    }

    public function category ()
    {
        return $this->hasOne(Category::class);
    }
}
