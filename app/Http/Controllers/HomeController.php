<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorRequest;
use App\Models\Job;
use App\Models\Contact;
use Auth;
use Hash;
use DB;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        if (Auth::guard('student')->check())
            {
                return redirect()->back();
            }
        elseif (Auth::guard('tutor')->check())
            {
                return redirect()->back();
            }
        elseif (Auth::guard('admin')->check())
            {
                return redirect()->back();
            }
        else
            {
                return view('index');
            } 
        
    }
    public function sign_up()
    {
        if (Auth::guard('student')->check())
            {
                return redirect()->back();
            }
        elseif (Auth::guard('tutor')->check())
            {
                return redirect()->back();
            }
        elseif (Auth::guard('admin')->check())
            {
                return redirect()->back();
            }
        else
            {
                return view('sign_up');
            }
    }
    public function login()
    {
        if (Auth::guard('student')->check())
            {
                return redirect()->back();
            }
        elseif (Auth::guard('tutor')->check())
            {
                return redirect()->back();
            }
        elseif (Auth::guard('admin')->check())
            {
                return redirect()->back();
            }
        else
            {
                return view('login');
            }
    }
    public function tuition_job()
    {
        $datas = DB::select('SELECT * FROM jobs ORDER BY id DESC');
        return view('tuition_job',compact('datas'));
    }
    public function job_details(Request $request,$id)
    {
        $datas = DB::select("SELECT * FROM jobs WHERE id = $id");
        return view('job_details',compact('datas'));
    }
    public function tutor_list()
    {
        $datas = DB::select('SELECT * FROM teacher_details ORDER BY id DESC');
        return view('tutor_list',compact('datas'));
    }
    public function tutor_details(Request $request,$id)
    {
        $datas = DB::select("SELECT * FROM teacher_details WHERE id = $id");
        $creatorid = $datas[0]->teacherid;
        $videos = DB::select("SELECT * FROM videos WHERE creatorid = $creatorid");
        return view('tutor_details',compact('datas','videos'));
    }
    public function tutor_request()
    {
        return view('tutor_request');
    }
    public function doTutor_request(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'phone' => 'required',
            'medium' => 'required',
            'class' => 'required',
            'Tuition_District' => 'required',
            'Tutor_Location' => 'required',
        ]);
        // return redirect()->route('index')->with('success', 'Request Successfully Send');
        $new = new TutorRequest();
        $new->student_name = $request->student_name;
        $new->phone = $request->phone;
        $new->medium = $request->medium;
        $new->class = $request->class;
        $new->Tuition_District = $request->Tuition_District;
        $new->Tutor_Location = $request->Tutor_Location;
        $new->save();
        return redirect()->route('tutor_request')->with('success', 'Request Successfully Send');

    }
    public function common_contact(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $new = new Contact();

        $new->teacherid = $id;
        $new->name = $request->name;
        $new->phone = $request->phone;
        $new->message = $request->message;
        $new->save();

        return redirect()->back()->with('success', 'Message Send');
    }
}
