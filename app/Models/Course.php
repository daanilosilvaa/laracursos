<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name','price_current', 'price_commission', 'description','link','active'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
