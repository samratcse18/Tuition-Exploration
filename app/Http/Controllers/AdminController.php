<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Job;
use App\Models\TutorRequest;
use Auth;
use Hash;
use DB;

class AdminController extends Controller
{
    public function admin_login_page()
    {
        return view('admin.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:16'
        ],
        [
            'email.required'=>'Email is Required',
            'email.email'=>'Please Enter Valid Email',
            'password.required'=>'Password is Required',
            'password.min'=>'Password Minimum 8 Characters',
            'password.max'=>'Password Maximum 16 Characters',
        ]
        );

        $check=$request->only('email','password');

        if(Auth::guard('admin')->attempt($check)){
            return redirect()->route('admin.dashboard')->with('success','Welcome to admin home page');
        }
        else {
            return redirect()->route('admin_login_page')->with('error','email and password invalid');
        }
    }
    public function admin_dashboard(Request $request)
    {
        return view('admin.deshboard');
    }
    public function admin_logout()
    {
        if(Auth::guard('admin')->user())
        {
            Auth::guard('admin')->logout();
        }
        return redirect()->route('admin_login_page');
    }
    public function student_request()
    {
        $s_requests = DB::select('SELECT * FROM tutor_requests ORDER BY created_at DESC');
        return view('admin.student_request',compact('s_requests'));
    }
    public function delete_student_request($id){
        DB::delete('delete from tutor_requests where id = ?',[$id]);
        return redirect()->route('student_request')->with('success','One request Deleted');
    }
    public function student_job_request(){
        $datas = DB::select('SELECT * FROM jobs ORDER BY id DESC');
        return view('admin.student.student_job_request',compact('datas'));
    }
    public function job_request_details(Request $request,$id)
    {
        $datas = DB::select("SELECT * FROM jobs WHERE id = $id");
        if (!empty($datas)) {
            $creatorid = $datas[0]->creatorid;
        }
        $student = DB::select("SELECT * FROM students WHERE id = $creatorid");
        return view('admin.student.job_request_details',compact('datas','student','creatorid'));
    }
    public function job_status_change(Request $request,$id)
    {
        $request->validate([
            'status' => 'required',
        ]);
            $new = Job::findOrFail($id);
            $new->status=$request->status;
            $new->save();
        return redirect()->back()->with('success','Update Status Successfully');
    }
    public function application(){
        $datas = DB::select('SELECT * FROM job_applications ORDER BY id DESC');
        return view('admin.teacher.application',compact('datas'));
    }
}
