<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryVideo;
use App\MsgApp;
use \Yajra\Datatables\Datatables;


class GalleryVideoController extends Controller
{

    public function index(Request $request)
    {
        $user = auth()->user();
        if ($request->ajax()) {
            $data = GalleryVideo::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($artist) {
                    $url= asset($artist->image);
                    return $url;
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('videoData.edit', $row->id));
                    $btn .= btnDelete(route('videoData.destroy', $row->id));
                    return $btn;
                })
                ->make(true);
        }
        return view('admin.gallery-video.index');
    }


    public function create()
    {
        return view('admin.gallery-video.create');
    }


    public function store(Request $request)
    {
        GalleryVideo::saveData($request);
        return redirect()->route('videoData.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        GalleryVideo::getBanner($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }


    public function edit($id)
    {
        $user = auth()->user();
        $data = GalleryVideo::find($id);
        return view('admin.gallery-video.edit', compact('user', 'data'));
    }

    public function update(Request $request, $id)
    {
        GalleryVideo::saveData($request,$id);
        return redirect()->route('videoData.index')->with('success', MsgApp::SUCCESS_UPD);
    }


    public function destroy($id)
    {
        return $id;
    }
}
