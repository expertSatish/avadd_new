<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\Department;
use \Yajra\Datatables\Datatables;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Department::select('*');
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('department.edit', $row->id));
                    $btn .= btnDelete(route('department.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.department.index');
    }

    public function create()
    {
        return view('admin.department.create');
    }

    public function store(Request $request)
    {
        Department::saveData($request);
        return redirect()->route('department.index')->with('success', MsgApp::SUCCESS_ADDED);
    }
    public function show($id)
    {
        Department::getDepartment($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $data = Department::find($id);
        return view('admin.department.edit', compact('user', 'data'));
    }

    public function update(Request $request, $id)
    {
        Department::saveData($request,$id);
        return redirect()->route('department.index')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function destroy($id)
    {

    }
}

