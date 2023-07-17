<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\MsgApp;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $availData = Event::get();
        // if ($request->ajax()) {
        //     $data = Event::select('*');
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('images', function ($artist) {
        //             $url= asset($artist->images);
        //             return $url;
        //         })
        //         ->editColumn('description', function ($row) {
        //             return htmlspecialchars_decode($row->description);

        //         })
        //         ->addColumn('action', function ($row) {
        //             $btn = btnEdit(route('manage-event.edit', $row->id));
        //             $btn .= btnDelete(route('manage-event.destroy', $row->id));
        //             return $btn;
        //         })
        //         ->rawColumns(['action','description'])
        //         ->make(true);
        // }
        return view('admin.events.index',compact('availData'));
    }

    public function create()
    {
        return view('admin.events.create');
    }
    public function store(Request $request)
    {
        $image = array();
        if($files = $request->file('images'))
        {
            foreach($files as $file){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'multiple_image/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $image[] = $image_url;
            }
        }
        Event::insert([
            'images'=> implode('|',$image),
            'title' => $request->title,
            'description'=>$request->description,
            'slug' => Str::slug($request->title),
        ]);
        
        return redirect()->route('manage-event.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function show($id)
    {
        Event::getData($id);
        return redirect()->back()->with('success', MsgApp::SUCCESS_DEL);
    }

    public function edit($id)
    {
        $data = Event::find($id);
        return view('admin.events.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $images = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'images', '/images');
        Event::saveData($request, $images,$id);
        return redirect()->route('manage-event.index')->with('success', MsgApp::SUCCESS_ADDED);
    }

    public function destroy($id)
    {
       return $id;
    }
}
