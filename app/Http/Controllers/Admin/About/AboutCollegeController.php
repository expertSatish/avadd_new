<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\AboutCollege;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
class AboutCollegeController extends Controller
{

    public function index(Request $request)
    {
        $availData = AboutCollege::first();
        if ($request->ajax()) {
            $data = AboutCollege::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('about_image', function ($artist) {
                    $url= asset($artist->about_image);
                    return $url;
                })
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('college.edit', $row->id));
                    $btn .= btnDelete(route('college.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.about_college.index',compact('availData'));
    }

    public function create()
    {
        return view('admin.about_college.create');
    }

    public function store(Request $request)
    {
        $about_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'about_image', '/college');
        AboutCollege::saveData($request, $about_image);
        return redirect()->route('college.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        AboutCollege::getData($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = AboutCollege::find($id);
        return view('admin.about_college.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $about_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'about_image', '/college');
        AboutCollege::saveData($request, $about_image,$id);
        return redirect()->route('college.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function destroy($id)
    {
       return $id;
    }
}
