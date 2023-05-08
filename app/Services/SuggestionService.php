<?php

namespace App\Services;

use App\Models\Suggestion;
use App\Repositories\Contracts\SuggestionRepositoryInterface;


class SuggestionService
{
    private $repository;

    public function __construct(SuggestionRepositoryInterface $repository)
    {
        $this->repository =  $repository;
    }

    public function createNewSuggestion(array $suggestion)
    {
        $suggestion = $this->suggestionRepository->createNewSuggestion(
            $name,
            $email,
            $phone,
            $description
        );


    }


}
