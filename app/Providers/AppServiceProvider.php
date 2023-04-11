<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{
    Course,
    Image,
};
use App\Observers\{
    CourseObserver,
    ImageObserver,
};

use App\Repositories\Contracts\{
    CourseRepositoryInterface,
};

use App\Repositories\{
    CourseRepository,
};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind(
        CourseRepositoryInterface::class,
        CourseRepository::class
       );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Course::observe(CourseObserver::class);
        Image::observe(ImageObserver::class);
    }
}
