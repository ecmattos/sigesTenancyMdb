<?php

namespace App\Http\Controllers;

use App\Entities\Client;
use App\Events\Tenant\TenantWasCreated;
use Illuminate\Http\Request;

class ClientController extends Controller
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
