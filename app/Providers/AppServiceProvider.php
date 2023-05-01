<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{
    Course,
    Image,
    Partner,
};
use App\Observers\{
    CourseObserver,
    ImageObserver,
    PartnerObserver,
};

use App\Repositories\Contracts\{
    CourseRepositoryInterface,
    CategoryRepositoryInterface,
};

use App\Repositories\{
    CourseRepository,
    CategoryRepository,
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
       $this->app->bind(
        CategoryRepositoryInterface::class,
        CategoryRepository::class
       );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Course::observe(CourseObserver::class);
        Image::observe(ImageObserver::class);
        Partner::observe(PartnerObserver::class);
    }
}
