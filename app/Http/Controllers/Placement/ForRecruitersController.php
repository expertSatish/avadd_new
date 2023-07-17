<?php

namespace App\Http\Controllers\Placement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\forRecruiter;
use \Yajra\Datatables\Datatables;

class ForRecruitersController extends Controller
{
    
    public function index(Request $request)
    {
        $user = auth()->user();
        if ($request->ajax()) {
            $data = forRecruiter::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($artist) {
                    $url= asset($artist->image);
                    return $url;
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('add-Recruiter.edit', $row->id));
                    $btn .= btnDelete(route('add-Recruiter.destroy', $row->id));
                    return $btn;
                })
                ->make(true);
        }
        return view('admin.forRecruiter.index');
    }

    public function create()
    {
        return view('admin.forRecruiter.create');
    }

    public function store(Request $request)
    {
        $gallery = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/forRecruiter');
        forRecruiter::saveData($request,  $gallery);
        return redirect()->route('add-Recruiter.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

   
    public function show($id)
    {
        forRecruiter::getBanner($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

  
    public function edit($id)
    {
       
        $data = forRecruiter::find($id);
        return view('admin.forRecruiter.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        $gallery = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/forRecruiter');
        forRecruiter::saveData($request,$gallery,$id);
        return redirect()->route('add-Recruiter.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function destroy($id)
    {
        return $id;
    }
}
