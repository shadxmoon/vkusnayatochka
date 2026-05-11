<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    public function products():HasMany
    {
        return $this->hasMany(Product::class)->orderBy('title');
    }

    public function productsWithPrice():HasMany
    {
        return $this->hasMany(Product::class)->where('price','>',10000);
    }
    protected static function booted(){
        static::saving
        (function($category){
            $category->slug = Str::slug($category->title);
            $count = static::where('slug', 'like', ($category->slug) ."%")->count();
            if ($count > 0){
                $category->slug .= '-'.($count+1);
            }
        });
    }
}
