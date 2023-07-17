<?php

namespace App\Http\Controllers\Placement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\PlacementMember;
use \Yajra\Datatables\Datatables;

class PlacementMemberController extends Controller
{
 
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PlacementMember::select('*')->where('status','active')->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('add-member.edit', $row->id));
                    $btn .= btnDelete(route('add-member.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.PlacementMember.index');
    }

    public function create()
    {
        return view('admin.PlacementMember.create');
    }

    public function store(Request $request)
    {
        PlacementMember::saveData($request);
        return redirect()->route('add-member.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        PlacementMember::getDepartment($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = PlacementMember::find($id);
        return view('admin.PlacementMember.edit',compact('data'));
    }
   
    public function update(Request $request, $id)
    {
        PlacementMember::saveData($request,$id);
        return redirect()->route('add-member.index')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function destroy($id)
    {
       return $id;
    }
}
