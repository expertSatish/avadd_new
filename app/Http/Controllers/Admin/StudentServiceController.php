<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\StudentService;
use \Yajra\Datatables\Datatables;

class StudentServiceController extends Controller
{
    public function index(Request $request)
    {
        $availData = StudentService::first();
        if ($request->ajax()) {
            $data = StudentService::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('hod_image', function ($artist) {
                    $url= asset($artist->image);
                    return $url;
                })
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('StudentServices.edit', $row->id));
                    $btn .= btnDelete(route('StudentServices.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.StudentServices.index');
    }

  
    public function create()
    {
        return view('admin.StudentServices.create');

    }

    public function store(Request $request)
    {
        $award = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/StudentService_image');
        StudentService::saveData($request,  $award);
        return redirect()->route('StudentServices.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        StudentService::StudentService($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
      
    }

    public function edit($id)
    {
        $user = auth()->user();
        $data = StudentService::find($id);
        return view('admin.StudentServices.edit', compact('user', 'data'));
    }


    public function update(Request $request, $id)
    {
        $award = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/StudentService_image');
        StudentService::saveData($request,$award, $id);
        return redirect()->route('StudentServices.index')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function destroy($id)
    {
       return $id;
    }
}
