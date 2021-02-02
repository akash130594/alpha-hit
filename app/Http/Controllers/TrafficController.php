<?php

namespace App\Http\Controllers;

use App\Repositories\StartRepository;
use Illuminate\Http\Request;


class TrafficController extends Controller
{
    public $startRepo;

    public function __construct(StartRepository $startRepo)
    {
        $this->startRepo = $startRepo;
    }

    public function startPage(Request $request)
    {
        $data = $request->all();
        $linkArray = explode('-', $data['linkid']);
        if(count($linkArray) === 3){
            $projectId = $linkArray[0];
            $sourceId = $linkArray[2];
            $sourceData = $this->startRepo->getSourceById($sourceId);
            $projectData = $this->startRepo->getProjectDetails($projectId);
            if($sourceData && $projectData){
                dd($sourceData);
            }
        }
        dd($request->all(), "tada");
    }

    public function endPage()
    {
        dd("hello");
    }
}
