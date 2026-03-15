<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'image_url', 'is_active'];

    // A category has many menu items
    public function menuItems(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
}