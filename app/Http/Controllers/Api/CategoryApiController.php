<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\CategoryService;

class CategoryApiController extends Controller
{
   protected $categoryService;

   public function __construct(CategoryService $categoryService)
   {
    $this->categoryService = $categoryService;
   }

   public function index()
   {
     return $this->categoryService->getAllCategories();
   }
}
