<?php

namespace App\Http\ViewComposer;

use App\Company;
use Illuminate\View\View;

class NavigationViewComposer 
{
    public function compose(View $view)
    {
        $companies = Company::all();

        if (auth()->check()) {
            $companies = auth()->user()->companies;
        }

        $view->with('companies', $companies);
    }
}