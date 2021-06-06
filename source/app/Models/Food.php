<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Restaurant;

class Food extends Model
{
    use HasFactory;

    protected $table = "foods";
    
    protected $fillable = ['name', 'description', 'price', 'sale_price', 'fee', 'explain_fee', 'prepare_food', 'category_id', 'restaurant_id'];

    public function tags () 
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories ()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function restaurants ()
    {
        return $this->belongsTo(Restaurant::class, 'id');
    }
}
