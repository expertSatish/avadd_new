<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\DirectorMessage;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
class DirectorController extends Controller
{
    public function index(Request $request)
    {
        $availData = DirectorMessage::first();
        if ($request->ajax()) {
            $data = DirectorMessage::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('director_image', function ($artist) {
                    $url= asset($artist->director_image);
                    return $url;
                })
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('director-message.edit', $row->id));
                    $btn .= btnDelete(route('director-message.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.director_message.index',compact('availData'));
    }

    public function create()
    {
        return view('admin.director_message.create');
    }

    public function store(Request $request)
    {
        $director_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'director_image', '/director_image');
        DirectorMessage::saveData($request, $director_image);
        return redirect()->route('director-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        DirectorMessage::getData($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = DirectorMessage::find($id);
        return view('admin.director_message.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $director_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'director_image', '/director_image');
        DirectorMessage::saveData($request, $director_image,$id);
        return redirect()->route('director-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function destroy($id)
    {
       return $id;
    }
}
