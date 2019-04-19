<?php

namespace App\Http\ViewComposer;

use App\Client;
use Illuminate\View\View;

class NavigationViewComposer 
{
    public function compose(View $view)
    {
        $clients = Client::all();

        if (auth()->check()) {
            $clients = auth()->user()->clients;
        }

        $view->with('clients', $clients);
    }
}