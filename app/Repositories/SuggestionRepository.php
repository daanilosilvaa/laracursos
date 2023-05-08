<?php

namespace App\Repositories;

use App\Models\{
    Suggestion,
};
use App\Repositories\Contracts\SuggestionRepositoryInterface;

class SuggestionRepository implements SuggestionRepositoryInterface
{
    protected $entity;

    public function __construct(Suggestion $suggestion, )
    {
        $this->entity = $suggestion;

    }
    public function createNewSuggestion(
        string $name,
        string $email,
        string $phone,
        string $description,
    ){
        $suggestion = $this->entity->create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'description' => $description
        ]);

    }

}
