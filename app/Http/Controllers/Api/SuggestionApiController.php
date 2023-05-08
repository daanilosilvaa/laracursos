<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SuggestionService;

class SuggestionApiController extends Controller
{
    protected $suggestionService;

    public function __construct(SuggestionService $suggestionService)
    {
        $this->suggestionService = $suggestionService;
    }

    public function store(StoreSuggestion $request)
    {
        $suggestion = $this->suggestionService->createNewSuggestion($request->all());

        return new SuggestionResource($suggestion);
    }
}
