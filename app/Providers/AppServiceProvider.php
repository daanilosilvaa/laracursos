<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{
    Course,
    Image,
    Partner,
    About,
};
use App\Observers\{
    CourseObserver,
    ImageObserver,
    PartnerObserver,
};

use App\Repositories\Contracts\{
    CourseRepositoryInterface,
    CategoryRepositoryInterface,
    MeRepositoryInterface,
    InfoRepositoryInterface,
};

use App\Repositories\{
    CourseRepository,
    CategoryRepository,
    MeRepository,
    InfoRepository,
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
       $this->app->bind(
        MeRepositoryInterface::class,
        MeRepository::class
       );
       $this->app->bind(
        InfoRepositoryInterface::class,
        InfoRepository::class
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
