<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','price_current', 'price_commission', 'description','link','active'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Categories not linked with this profile
     *
     */
    public function categoriesAvailable()
    {
        $categories = Category::whereNotIn('id', function($query) {
            $query->select('category_course.category_id');
            $query->from('category_course');
            $query->whereRaw("category_course.course_id={$this->id}");
        })->where('active', 'A')
          ->paginate();

        return $categories;

    }
}
