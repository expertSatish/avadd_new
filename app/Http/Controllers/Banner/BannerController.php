<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\MsgApp;
use \Yajra\Datatables\Datatables;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $page = MsgApp::Banner;
        if ($request->ajax()) {
            $data = Banner::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('banner', function ($artist) {
                    $url= asset($artist->banner);
                    return $url;
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('banners.edit', $row->id));
                    $btn .= btnDelete(route('banners.destroy', $row->id));
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
       return view('admin.banner.index',compact('page'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $banner = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'banner', '/banner');
        Banner::saveData($request,  $banner, $user->user_id);
        return redirect()->route('banners.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        Banner::getBanner($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $user = auth()->user();
        $data = Banner::find($id);
        return view('admin.banner.edit', compact('user', 'data'));
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $banner = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'banner', '/banner');
        Banner::saveData($request,  $banner, $user->user_id, $id);
        return redirect()->route('banners.index')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function destroy($id)
    {
        return $id;
    }
}
