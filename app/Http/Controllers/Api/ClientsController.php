<?php

namespace App\Http\Controllers\Api;

use App\Entities\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Tenant\TenantWasCreated;

class ClientsController extends Controller
{
    public function create() 
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = Client::make([
            'name' => $request->name
        ]);

        $request->user()->clients()->save($client);

        event(new TenantWasCreated($client));

        return redirect()->route('tenant.switch', $client);
    }
}
