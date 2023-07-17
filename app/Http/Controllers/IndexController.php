<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutCollege;
use App\Models\AdvisorMessage;
use App\Models\Banner;
use App\Models\DirectorMessage;
use App\Models\Faculty;
use App\Models\GalleryVideo;
use App\Models\Gallery;
use App\Models\HodMessage;
use App\Models\ManagerMessage;
use App\Models\VisionMission;
use App\Models\Academic;
use App\Models\CareerDevelopment;
use App\Models\City;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\State;
use App\Models\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class IndexController extends Controller
{
    public function index()
    {
        $banner = Banner::get();
        return view('frontPages.index',compact('banner'));
    }
    public function aboutCollege()
    {
        $aboutCollege = AboutCollege::first();
        return view('frontPages.about-college', compact('aboutCollege'));
    }
    public function visionMission()
    {
        $data = VisionMission::first();
        return view('frontPages.vision_mission',compact('data'));
    }
    public function managerMessage()
    {
        $data =  ManagerMessage::first();
        return view('frontPages.manager_message',compact('data'));
    }
    public function directorMessage()
    {
        $data =  DirectorMessage::first();
        return view('frontPages.director_message',compact('data'));
    }
    public function hodMessage()
    {
        $data =  HodMessage::first();
        return view('frontPages.hod_message', compact('data'));
    }
    public function advisorMessage()
    {
        $data =  AdvisorMessage::first();
        return view('frontPages.advisor_message',compact('data'));
    }
    public function whyUs()
    {
        return view('frontPages.why_us');
    }

    public function contact()
    {
        return view('frontPages.contact');
    }
    public function imageGallery()
    {
        $gallery = Gallery::get();
        return view('frontPages.image-gallery',compact('gallery'));
    }
    public function  videoGallery()
    {
        $videogallery = GalleryVideo::get();
        return view('frontPages.video-gallery',compact('videogallery'));
    }
    public function antiragging()
    {
        return view('frontPages.anti-rangging');
    }

    public function genderSensitization()
    {
        return view('frontPages.gender-sensitization');
    }

    public function placementCell()
    {
        return view('frontPages.placement-cell');
    }
    public function careerDevelopmant()
    {
        return view('frontPages.career-developmant');
    }
    public function saveCareerForm(Request $request)
    {
        if ($request->hasFile('resume')) {
            $resumeFile = $request->file('resume'); // Get the uploaded file
    
            if ($resumeFile->isValid()) {
                $resume = random_int(1000000, 9999999) . '-' . time() . '.' . $resumeFile->getClientOriginalExtension();
                $filePath = public_path('resume/');
                $resumeFile->move($filePath, $resume);
    
                CareerDevelopment::saveData($request, $resume);
    
                return redirect()->back()->with('success', 'Thank You For Contacting Us!');
            }
        }

    }
    public function forRecruiters()
    {
        $banner = Banner::get();
        return view('frontPages.for-recruiters',compact('banner'));
    }

    public function placementInternship()
    {
        return view('frontPages.placement-internship');
    }

    public function pharmaceuticsDepartment($slug)
    {
        $faculty = Faculty::where('slug',$slug)->get();
        $department_name = Faculty::where('slug',$slug)->first();
        return view('frontPages.departments',compact('slug','faculty','department_name'));
    }

    public function academicDetails($slug)
    {
        $academic = Academic::where('slug',$slug)->get();
        $academicname = Academic::where('slug',$slug)->first('academic_name');
        $academic_name = $academicname->academic_name;
        
        return view('frontPages.academicDetails',compact('academic','academic_name'));

    }
    public function studentServiceData($slug)
    {
        $service_data = StudentService::where('slug',$slug)->first();
        return view('frontPages.student_service',compact('service_data'));
    }
    
    public function dpharm()
    {
        return view('frontPages.d-pharm');
    }
    
    public function bpharm()
    {
        return view('frontPages.b-pharm');
    }
    public function freeEnglish()
    {
        return view('frontPages.free-english-speaking-classes');
    }
    public function library()
    {
        return view('frontPages.library');
    }
    public function wiFacility()
    {
        return view('frontPages.wi-fi-facility');
    }

    public function laboratories()
    {
        return view('frontPages.laboratories');
    }
    public function sportsFacility()
    {
        return view('frontPages.sports-facility');
    }
    public function scholarshipFacility()
    {
        return view('frontPages.scholarship-facility');
    }
    public function busFacility()
    {
        return view('frontPages.bus-facility');
    }
    public function hostelFacility()
    {
        return view('frontPages.hostel-facility');
    }

    public function faq()
    {
        return view('frontPages.faq');
    }

    public function privacyPolicy()
    {
        return view('frontPages.privacy-policy');
    }
    public function termCondition()
    {
        return view('frontPages.terms-and-condition');
    }
    public function feedback()
    {
        return view('frontPages.feedback');
    }

    public function enquiry()
    {
        $states = State::where('status', 'Active')->get();
        return view('frontPages.enquiry',compact('states'));
    }

    public function getCities(Request $request)
    {
        $stateId = $request->query('stateId');
        $cities = City::where('state_id', $stateId)->get();
    
        return response()->json($cities);
    }

    public function enquirySave(Request $request)
    {
       Enquiry::saveData($request);
       return redirect()->back()->with('success', 'Thank You For Contact Us!');
    }

    public function postData(Request $request)
    {
        $sts = true;
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|between:3,50|email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/',
                'name' => 'required',
                'message' => 'required',
                'subject' => 'required',
            ],
            [
                'mobile.regex' => 'Please enter a valid Mobile Number',
                'required' => ':attribute is required.',
                'unique' => ':attribute already exists.',
                'exists' => ':attribute is not exists.',
                'regex' => ':attribute is invalid.',
                'between' => ':attribute must be between :min to :max.',
            ],
            ['name' => 'Name', 'subject' => 'Subject', 'email' => 'Email',  'message' => 'Message']
        );

        if ($validator->fails()) {
            $msg = $validator->errors();
            $sts = false;
            return response(compact('sts', 'msg'), 200);
        } else {
            Contact::saveData($request);
            $msg = 'Thank You for Contact Us.';
            return response(compact('sts', 'msg'), 200);
        }
    }

    
}
