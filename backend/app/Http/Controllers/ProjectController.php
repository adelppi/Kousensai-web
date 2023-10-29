<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Project::all();
    }
    
    public function incrementVote($id)
    {
        return 0;
        // return Project::incrementVote($id);
    }

    public function decrementVote($id)
    {
        return 0;
        // return Project::decrementVote($id);
    }
    
    public function getTopTenProjects()
    {
        return Project::getTopTenProjects();
    }

    public function updateNote(Request $request)
    {
        return Project::updateNote($request);
    }
    public function deleteNote(Request $request)
    {
        return Project::deleteNote($request);
    }
}
