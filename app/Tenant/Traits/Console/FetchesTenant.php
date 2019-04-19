<?php

namespace App\Tenant\Traits\Console;

use App\Entities\Client;

trait FetchesTenant
{
    public function tenants($ids = null)
    {
        $tenants = Client::query();

        if ($ids) {
            $tenants = $tenants->whereIn('id', $ids);
        }

        return $tenants;
    }
}