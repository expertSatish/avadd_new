<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\Faculty;
use \Yajra\Datatables\Datatables;

class FacultyController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Faculty::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->editColumn('department_name', function ($row) {
                    return $this->idByName($row->id);

                })
                ->addColumn('faculty_image', function ($artist) {
                    $url= asset($artist->faculty_image);
                    return $url;
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('faculty.edit', $row->id));
                    $btn .= btnDelete(route('faculty.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description','long_desc'])
                ->make(true);
        }
        return view('admin.faculty.index');
    }

    public static function idByName($id)
    {
        $data = Department::find($id);
        return $data->name;
    }

    public function create()
    {
        $department = Department::get();
        return view('admin.faculty.create',compact('department'));
    }

    public function store(Request $request)
    {
        $faculty_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'faculty_image', '/faculty_image');
        Faculty::saveData($request,$faculty_image);
        return redirect()->route('faculty.index')->with('success', MsgApp::SUCCESS_ADDED);
    }
    public function show($id)
    {
        Faculty::getFaculty($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $data = Faculty::find($id);
        $department = Department::get();
        return view('admin.faculty.edit', compact('user', 'data','department'));
    }

    public function update(Request $request, $id)
    {
        $faculty_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'faculty_image', '/faculty_image');
        Faculty::saveData($request, $faculty_image, $id);
        return redirect()->route('faculty.index')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function destroy($id)
    {
    return $id;
    }
}
