<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\InfoService;

class AboutApiController extends Controller
{
    protected $aboutService;

    public function __construct(InfoService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index()
    {

        return $this->aboutService->getAllAbouts();
    }
}
