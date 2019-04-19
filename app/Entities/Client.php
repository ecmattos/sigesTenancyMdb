<?php

namespace App;

use App\Tenant\Models\Tenant;
use App\Tenant\Traits\IsTenant;
use App\Tenant\Traits\ForSystem;
use Illuminate\Database\Eloquent\Model;

class Client extends Model implements Tenant
{
    use IsTenant, ForSystem;

    protected $fillable = [
        'name',
        'uuid'
    ];
}
