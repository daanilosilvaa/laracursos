<?php

namespace App\Repositories\Contracts;

interface SuggestionRepositoryInterface
{
    public function createNewSuggestion(
        string $name,
        string $email,
        string $phone,
        string $description,


    );
}
