<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public static function incrementVote($id)
    {
        $project = self::find($id);

        if (!$project) {
            return response()->json(['message' => 'Couldnt find the project.'], 404);
        }

        $project->increment('vote');
        return response()->json(['message' => "incremented vote (id: $id)"]);
    }

    public static function decrementVote($id)
    {
        $project = self::find($id);
        
        if (!$project) {
            return response()->json(['message' => 'Couldnt find the project.'], 404);
        }

        $project->decrement('vote');
        return response()->json(['message' => "decremented vote (id: $id)"]);
    }

    public static function getTopThreeProjects()
    {
        $topThreeProjects = self::orderBy('vote', 'desc')
            ->take(3)
            ->get();
        // dd($topThreeProjects);
        return $topThreeProjects;
    }
}
