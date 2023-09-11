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
        // 指定されたIDのプロジェクトを取得
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['error' => 'プロジェクトが見つかりません'], 404);
        }

        // vote カラムを1インクリメント
        $project->increment('vote');

        // インクリメント後のプロジェクト情報を返す
        return response()->json($project, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
