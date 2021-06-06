<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";

    protected $fillable = ['tag_name', 'slug'];

    public function foods ()
    {
        return $this->belongsToMany(Food::class);
    }
}
