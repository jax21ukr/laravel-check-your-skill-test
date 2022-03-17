<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'active'];

    // TODO Eloquent Задание 1: указать что таблица - products
    protected $table = 'products';

    public function scopeActive($query)
    {
        $query->where('active', 1);
    }
}
