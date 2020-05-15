<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        static::created(function ($user) {
            $user->slug = str_slug($user->name);
        });
    }

    public function parrent_category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function child_category ()
    {
        return $this->hasMany(Category::class);
    }
    public function product ()
    {
        return $this->hasMany(Product::class);
    }
}
