<?php

namespace App\Entities;

use App\Tenant\Traits\ForTenant;
use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{
    use ForTenant;
}
