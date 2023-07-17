<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\MsgApp;
use \Yajra\Datatables\Datatables;

class GalleryController extends Controller
{
   
    public function index(Request $request)
    {
        $user = auth()->user();
        if ($request->ajax()) {
            $data = Gallery::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($artist) {
                    $url= asset($artist->image);
                    return $url;
                })
                ->addColumn('action', function ($row) {
                    $btn = btnEdit(route('gallery.edit', $row->id));
                    $btn .= btnDelete(route('gallery.destroy', $row->id));
                    return $btn;
                })
                ->make(true);
        }
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $gallery = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/gallery');
        Gallery::saveData($request,  $gallery, $user->user_id);
        return redirect()->route('gallery.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gallery::getBanner($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    
    public function edit($id)
    {
        $user = auth()->user();
        $data = Gallery::find($id);
        return view('admin.gallery.edit', compact('user', 'data'));
    }

  
    public function update(Request $request, $id)
    {
    
        $user = auth()->user();
        $gallery = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'image', '/gallery');
        Gallery::saveData($request,  $gallery, $user->user_id,$id);
        return redirect()->route('gallery.index')->with('success', MsgApp::SUCCESS_ADDED);
    }
  
    public function destroy($id)
    {

        return $id;
    }
}
