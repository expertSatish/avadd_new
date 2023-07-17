<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
use App\Models\HodMessage;
class HodMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $availData = HodMessage::first();
        if ($request->ajax()) {
            $data = HodMessage::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('hod_image', function ($artist) {
                    $url= asset($artist->hod_image);
                    return $url;
                })
                ->editColumn('description', function ($row) {
                    return htmlspecialchars_decode($row->description);

                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('hod-message.edit', $row->id));
                    $btn .= btnDelete(route('hod-message.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.hod_message.index',compact('availData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hod_message.create');
    }


    public function store(Request $request)
    {
        $director_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'hod_image', '/hod_image');
        HodMessage::saveData($request, $director_image);
        return redirect()->route('hod-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    
    public function show($id)
    {
        HodMessage::getData($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = HodMessage::find($id);
        return view('admin.hod_message.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $director_image = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'hod_image', '/hod_image');
        HodMessage::saveData($request, $director_image,$id);
        return redirect()->route('hod-message.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

     
    public function destroy($id)
    {
        return $id;
    }
}
