<?php

namespace App\Repositories;

use App\Models\{
    About, ContentAbout,
};
use App\Repositories\Contracts\InfoRepositoryInterface;

class InfoRepository implements InfoRepositoryInterface
{
    protected $entity, $contentAbout;

    public function __construct(About $about, ContentAbout $contentAbout)
    {
        $this->entity = $about;
        $this->contentAbout = $contentAbout;
    }
    public function getAllInfo()
    {
        $data['about'] = $this->entity->all();
        $data['contentAbout'] = $this->contentAbout->all();
        return $data;
    }

}
