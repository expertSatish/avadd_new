<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\MsgApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function index()
    {
         $user = auth()->user();
        return view('admin.setting.profile', compact('user'));
    }
    public function post(Request $request)
    {
        $id = auth()->user()->id;
        $validator = Validator::make(
            $request->all(),
            [
                'name' => MsgApp::VAL_STRING,
                'email' => Str::replace(MsgApp::TABLE_NAME, 'users,email,' . $id, MsgApp::VAL_EMAIL),
                'mobile' => Str::replace(MsgApp::TABLE_NAME, 'users,mobile,' . $id, MsgApp::VAL_MOBILE),
            ],
            [
                'required' => ':attribute is required.',
                'unique' => ':attribute already exists.',
                'exists' => ':attribute is not exists.',
                'regex' => ':attribute is invalid.',
                'between' => ':attribute must be between :min to :max.',
                'mimes' => ':attribute must be a file of type :mimes',
            ],
            ['name' => 'Name',  'email' => 'Email', 'mobile' => 'Mobile']
        );
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }
        User::saveData($request,$id);
        return redirect('/admin/setting/profile')->with('success', MsgApp::SUCCESS_UPD);
    }

    public function updatePass(Request $request)
    {
        $id = auth()->user()->id;
        $this->validate($request, [
            'password'     => 'required',
            'new_password'     => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

         $data = $request->all();

        if(!Hash::check($data['password'], auth()->user()->password)){

             return back()->with('failed','wrong old password');

        }else{

            User::where('id', $id)->update([
                'password' => Hash::make($request->input('confirm_password')),
            ]);
        
            return redirect('admin/setting/profile')->with('success', MsgApp::SUCCESS_UPD);

        }
    }
}
