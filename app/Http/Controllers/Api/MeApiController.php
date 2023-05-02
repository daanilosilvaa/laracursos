<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\{
    MeService,
};

class MeApiController extends Controller
{

    protected $meService;

    public function __construct(MeService $meService)
    {
        $this->meService = $meService;
    }

    public function index()
    {
        return $this->meService->getAllMes();
    }
}
