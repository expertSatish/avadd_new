<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\AdvisorMessage;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
class AdvisorController extends Controller
{
    public function index(Request $request)
    {
        $availData = AdvisorMessage::first();
        if ($request->ajax()) {
            $data = AdvisorMessage::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('advisor_image', function ($artist) {
                    $url= asset($artist->advisor_image);
                    return $url;
                })
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('advisor-message.edit', $row->id));
                    $btn .= btnDelete(route('advisor-message.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.advisor_message.index',compact('availData'));
    }

    public function create()
    {
        return view('admin.advisor_message.create');
    }

    public function store(Request $request)
    {
        $advisor_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'advisor_image', '/advisor_image');
        AdvisorMessage::saveData($request, $advisor_image);
        return redirect()->route('advisor-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        AdvisorMessage::getData($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = AdvisorMessage::find($id);
        return view('admin.advisor_message.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $advisor_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'advisor_image', '/advisor_image');
        AdvisorMessage::saveData($request, $advisor_image,$id);
        return redirect()->route('advisor-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function destroy($id)
    {
       return $id;
    }
}
