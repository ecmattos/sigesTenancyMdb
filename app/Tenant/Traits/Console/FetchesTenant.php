<?php

namespace App\Tenant\Traits\Console;

use App\Client;

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