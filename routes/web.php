<?php

use App\Http\Controllers\{
    ProfileController,
    CategoryController,
    CourseController,
    CourseCategoryController,
    ClientController,
    InfoCatchController,
    HomeController,
    MeController,
    PartnerController,
    AboutController,
    ContentAboutController,

};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'] );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/content_abouts', ContentAboutController::class);
    Route::resource('/abouts', AboutController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/mes', MeController::class);

    Route::resource('/infocatchs', InfoCatchController::class);

    Route::resource('/clients', ClientController::class);

    Route::get('course/{id}/category/{idCategory}', [CourseCategoryController::class, 'detachCourseCategories'])->name('course.category.detach');
    Route::post('course/{id}/categories', [CourseCategoryController::class, 'attachCourseCategories'])->name('course.categories.attach');
    Route::any('course/{id}/categories/create', [CourseCategoryController::class, 'categoriesAvailable'])->name('course.categories.available');
    Route::get('course/{id}/categories', [CourseCategoryController::class, 'categories'])->name('course.categories');

    Route::resource('courses', CourseController::class);
    Route::resource('categories', CategoryController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});

require __DIR__.'/auth.php';
