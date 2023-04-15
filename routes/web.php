<?php

use App\Http\Controllers\{
    ProfileController,
    CategoryController,
    CourseController,
    CourseCategoryController,
    ClientController,
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/clients', ClientController::class);

    // Route::delete('course/{idCourse}/images/{id}', [ImageController::class, 'destroy'])->name('course.images.destroy');
    // Route::post('course/{id}/images', [ImageController::class, 'store'])->name('course.images.store');
    // Route::any('course/{id}/image', [ImageController::class, 'create'])->name('course.image.create');
    // Route::get('course/{id}/images', [ImageController::class, 'index'])->name('course.images.index');

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
