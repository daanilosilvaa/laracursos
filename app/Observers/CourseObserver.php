<?php

namespace App\Observers;

use App\Models\Course;

class CourseObserver
{
    /**
     * Handle the Course "created" event.
     */
    public function creating(Course $course): void
    {
       $course->price = "00.00";
    }

    /**
     * Handle the Course "updated" event.
     */
    public function updating(Course $course): void
    {
       $course->price = $course->getOriginal('price_current');
    }

}
