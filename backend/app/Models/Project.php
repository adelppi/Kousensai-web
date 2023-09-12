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
            return response()->json(['message' => '指定されたプロジェクトが見つかりません'], 404);
        }

        $project->increment('vote');
        return response()->json(['message' => '投票がカウントされました']);
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
