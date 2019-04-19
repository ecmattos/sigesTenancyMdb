<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entities\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        return view('tenant.projects.index', compact('projects'));
    }
}
