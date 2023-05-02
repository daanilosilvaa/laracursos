<?php

namespace App\Repositories;

use App\Models\{
    Me,
    Partner,
};
use App\Repositories\Contracts\MeRepositoryInterface;

class MeRepository implements MeRepositoryInterface
{
    protected $entity, $partner;

    public function __construct(Me $me, Partner $partner)
    {
        $this->entity = $me;
        $this->partner = $partner;
    }
    public function getAllMes()
    {
        $data['me'] = $this->entity->all();
        $data['partner'] = $this->partner->all();
        return $data;
    }

}
