<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\Academic;
use \Yajra\Datatables\Datatables;
class AcademicController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Academic::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('manage-academics.edit', $row->id));
                    $btn .= btnDelete(route('manage-academics.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description','long_desc'])
                ->make(true);
        }
        return view('admin.academics.index');
    }
    
    public function create()
    {
        return view('admin.academics.create');

    }
    
    public function store(Request $request)
    {
        Academic::saveData($request);
        return redirect()->route('manage-academics.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

   
    public function show($id)
    {
        Academic::getBanner($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    
    public function edit($id)
    {
        $user = auth()->user();
        $data = Academic::find($id);
        return view('admin.academics.edit', compact('data',));
    }

  
    public function update(Request $request, $id)
    {
        Academic::saveData($request, $id);
        return redirect()->route('manage-academics.index')->with('success', MsgApp::SUCCESS_UPD);
    }


    public function destroy($id)
    {
        return $id;
    }
}
