<?php

namespace App\Http\Controllers\Api\Tenant;

use App\Http\Controllers\Controller;
use App\Entities\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        return view('tenant.projects.index', compact('projects'));
    }
}
