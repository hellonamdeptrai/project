<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','discount_percent','status', 'origin_price', 'sale_price', 'content', 'user_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        $this->belongsToMany(Order::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


}
