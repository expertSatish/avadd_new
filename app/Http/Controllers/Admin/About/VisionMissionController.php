<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\VisionMission;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
class VisionMissionController extends Controller
{

    public function index(Request $request)
    {
        $data = null;
        $data = VisionMission::first();
        $id = ($data)?$data->id:'';
        $action = 'mission_vission.store';
        return view('admin.vision_mission.addUpdate', compact('data', 'action', 'id'));
    }

    public function store(Request $request)
    {
        $data = VisionMission::first();
        $id = ($data)?$data->id:'';
        if($id == null):
        VisionMission::saveData($request, $id);
        else:
        VisionMission::updateData($request->vision, $request->mission, $request->objective, $id);
        endif;
       return redirect()->back()->with('success', MsgApp::SUCCESS_UPD);
    }
}
