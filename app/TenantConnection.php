<?php

namespace App;

use App\TenantConnection;

use Illuminate\Database\Eloquent\Model;

class TenantConnection extends Model
{
    protected $fillable = [
        'database'
    ];
}
