<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use App\Models\Award;
use \Yajra\Datatables\Datatables;
class AwardController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        if ($request->ajax()) {
            $data = Award::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('image', function ($artist) {
                    $url= asset($artist->image);
                    return $url;
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('awards.edit', $row->id));
                    $btn .= btnDelete(route('awards.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
       return view('admin.award.index');
    }

    public function create()
    {
        return view('admin.award.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $award = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/awards');
        Award::saveData($request,  $award, $user->user_id);
        return redirect()->route('awards.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        Award::getBanner($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $data = Award::find($id);
        return view('admin.award.edit', compact('user', 'data'));
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $award = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/awards');
        Award::saveData($request,  $award, $user->user_id, $id);
        return redirect()->route('awards.index')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function destroy($id)
    {
        return $id;
    }
}
