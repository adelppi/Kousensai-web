<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function incrementVote($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => '指定されたプロジェクトが見つかりません'], 404);
        }

        $project->increment('vote');
        return response()->json(['message' => '投票がカウントされました']);
    }
}
