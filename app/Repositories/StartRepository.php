<?php

use App\Repositories\BaseRepository;
namespace App\Repositories;

use App\Models\Project\Project;
use App\Models\Source\Source;

class StartRepository extends BaseRepository {
    public function model()
    {
        return Source::class;
    }

    public function getSourceById($sourceCode)
    {
        $source = parent::where('code',$sourceCode,'=')->first();
        return $source;
    }
    public function getProjectDetails($projectId)
    {
        $project = Project::where('code','=',$projectId)->first();
        return $project;
    }
}
