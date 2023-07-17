<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\ManagerMessage;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
class ManagerMessageController extends Controller
{
    public function index(Request $request)
    {
        $availData = ManagerMessage::first();
        if ($request->ajax()) {
            $data = ManagerMessage::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('manager_image', function ($artist) {
                    $url= asset($artist->manager_image);
                    return $url;
                })
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('manager-message.edit', $row->id));
                    $btn .= btnDelete(route('manager-message.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.manager_message.index',compact('availData'));
    }

    public function create()
    {
        return view('admin.manager_message.create');
    }

    public function store(Request $request)
    {
        $manager_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'manager_image', '/manager_image');
        ManagerMessage::saveData($request, $manager_image);
        return redirect()->route('manager-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        ManagerMessage::getData($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = ManagerMessage::find($id);
        return view('admin.manager_message.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $manager_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'manager_image', '/manager_image');
        ManagerMessage::saveData($request, $manager_image,$id);
        return redirect()->route('manager-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function destroy($id)
    {
       return $id;
    }
}
