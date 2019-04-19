<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class TenantController extends Controller
{
    public function switch(Client $client)
    {
        session()->put('tenant', $client->uuid);

        return redirect('/home');
    }
}
