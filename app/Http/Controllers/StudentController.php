<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Job;
use Auth;
use Hash;
use DB;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8',
        ]);
        $datas = DB::select('SELECT * FROM students ');
        $flag = false;
        foreach ($datas as $data) {
            if ($data->email == $request->email || $data->phone == $request->phone) {
                $flag = true;
            }
        }

        if ($flag == false) {

            if ($request->password == $request->cpassword) {
                $new = new Student();
                $new->name = $request->name;
                $new->email = $request->email;
                $new->phone = $request->phone;
                $new->password = Hash::make($request->password);
                $new->save();
                return redirect()
                    ->route('index')
                    ->with('success', 'Account create Successfully');
            } else {
                return redirect()
                    ->route('index')
                    ->with('error', 'Password and Confirm Password dose not match');
            }
        } elseif ($flag == true) {
            return redirect()
                ->route('index')
                ->with('error', 'Email or Phone Number must be Unique');
        }
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

        if(Auth::guard('student')->attempt($check)){
            return redirect()->route('student.dashboard')->with('success','Welcome to home page');
        }
        else {
            return redirect()->route('index')->with('error','email and password invalid');
        }
    }
    public function student_dashboard(Request $request)
    {
        return view('student.deshboard');
    }
    public function student_logout()
    {
        if(Auth::guard('student')->user())
        {
            Auth::guard('student')->logout();
        }
        return redirect()->route('index');
    }
    public function student_profile()
    {
        $id = Auth::user()->id;
        $datas = DB::select('SELECT * FROM jobs WHERE creatorid = ?', [$id]);
        return view('student.profile',compact('datas'));
    }
    public function student_tutor_request()
    {
        return view('student.tutor_request');
    }
    public function job_create(Request $request)
    {
        $request->validate([
            'creatorid' => 'required',
            'student_name' => 'required',
            'number_of_student' => 'required',
            'gender' => 'required',
            'institute' => 'required',
            'district' => 'required',
            'area' => 'required',
            'location' => 'required',
            'medium' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'type' => 'required',
            'teacher_gender' => 'required',
            'day' => 'required',
            'time' => 'required',
            'salary' => 'required',
            'extra_information' => 'required',
        ]);

        $new = new Job();
        $new->creatorid = $request->creatorid;
        $new->student_name = $request->student_name;
        $new->number_of_student = $request->number_of_student;
        $new->gender = $request->gender;
        $new->institute = $request->institute;
        $new->district = $request->district;
        $new->area = $request->area;
        $new->location = $request->location;
        $new->medium = $request->medium;
        $new->class = $request->class;
        $new->subject = implode(',',$request->subject);
        $new->type = $request->type;
        $new->teacher_gender = $request->teacher_gender;
        $new->day = $request->day;
        $new->time = $request->time;
        $new->salary = $request->salary;
        $new->extra_information = $request->extra_information;
        $new->status = "pending";
        $new->save();
        return redirect()->route('student.posted_jobs')->with('success', 'Job create Successfully');
    }
    public function posted_jobs()
    {
        $id = Auth::user()->id;
        $datas = DB::select('SELECT * FROM jobs WHERE creatorid = ?', [$id]);
        return view('student.posted_jobs',compact('datas'));
    }
    public function posted_job_details(Request $request,$id)
    {
        $datas = DB::select("SELECT * FROM jobs WHERE id = $id");
        return view('student.posted_job_details',compact('datas'));
    }
    public function profile_update_page()
    {
        return view('student.profile_update_page');
    }
    public function info_update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
            $new = Student::findOrFail($id);
            $new->name=$request->name;
            $new->phone=$request->phone;
            $new->save();
        return redirect()->back()->with('success','Update Info Successfully');
    }
    public function password_update(Request $request,$id)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8',
        ]);
        $student = Student::findOrFail($id);
        if (Hash::check($request->old_password, Auth::user()->password)) {
            if ($request->new_password == $request->confirm_password) {
                // Update password
                $student->password = Hash::make($request->new_password);
                $student->save();
                return redirect()->back()->with('success', 'Password updated successfully');
            } else {
                return redirect()->back()->with('error', 'New and confirm password do not match');
            }
        } else {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }
    }
}
