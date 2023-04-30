<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Partner;

class PartnerObserver
{
    /**
     * Handle the Partner "created" event.
     */
    public function creating(Partner $partner): void
    {
       $partner->uuid = Str::uuid();
    }


}
