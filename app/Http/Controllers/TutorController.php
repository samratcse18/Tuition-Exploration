<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\TeacherDetail;
use App\Models\Video;
use App\Models\Contact;
use App\Models\JobApplication;
use Auth;
use Hash;
use DB;
class TutorController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'Tuition_District' => 'required',
            'Tutor_Location' => 'required',
            'Preferred_Tuition_Area' => 'required',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8',
        ]);
        $datas = DB::select('SELECT * FROM tutors ');
        $flag = false;
        foreach ($datas as $data) {
            if ($data->email == $request->email || $data->phone == $request->phone) {
                $flag = true;
            }
        }

        if ($flag == false) {

            if ($request->password == $request->cpassword) {
                $new = new Tutor();
                $new->name = $request->name;
                $new->gender = $request->gender;
                $new->email = $request->email;
                $new->phone = $request->phone;
                $new->Tuition_District = $request->Tuition_District;
                $new->Tutor_Location = $request->Tutor_Location;
                $new->Preferred_Tuition_Area = $request->Preferred_Tuition_Area;
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
        $user = Tutor::where('email', $request->input('email'))->first();

        $check=$request->only('email','password');

        if(Auth::guard('tutor')->attempt($check)){
            Session::put('user', $user->id);
            return redirect()->route('teacher.dashboard')->with('success','Welcome to home page');
        }
        else {
            return redirect()->route('index')->with('error','email and password invalid');
        }
    }
    public function teacher_dashboard(Request $request)
    {
        return view('teacher.deshboard');
    }
    public function teacher_logout()
    {
        if(Auth::guard('tutor')->user())
        {
            Auth::guard('tutor')->logout();
        }
        Session::forget('user');
        return redirect()->route('index');
    }
    public function teacher_profile()
    {
        $teacherid = Auth::user()->id;
        $data = TeacherDetail::where('teacherid', $teacherid)->first();
        return view('teacher.profile')->with('data', $data);
    }
    public function profile_update()
    {
        $teacherid = Auth::user()->id;
        $data = TeacherDetail::where('teacherid', $teacherid)->first();
        // dd($data);
        return view('teacher.profile_update')->with('data', $data);
    }
    public function teacher_update_profile(Request $request,$id)
    {
        // dd($request->all());
        $teacherid = Auth::user()->id;

        $file = $request->file('file');
        $fileName = 'file' . $teacherid . '.' . $file->getClientOriginalExtension();
        $file->move('documents', $fileName);

        $image = $request->file('image');
        $imageName = 'image' . $teacherid . '.' . $image->getClientOriginalExtension();
        $image->move('documents', $imageName);

        $teacherExists = TeacherDetail::where('teacherid', $teacherid)->exists();

        if($teacherExists){
            $new = TeacherDetail::where('teacherid', $teacherid)->first();
        }
        else{
            $new = new TeacherDetail();
        }
        
        $new->teacherid = $teacherid;
        $new->ssc_institute = $request->ssc_institute;
        $new->ssc_curriculam = $request->ssc_curriculam;
        $new->ssc_group = $request->ssc_group;
        $new->ssc_year = $request->ssc_year;
        $new->ssc_gpa = $request->ssc_gpa;
        $new->hsc_institute = $request->hsc_institute;
        $new->hsc_curriculam = $request->hsc_curriculam;
        $new->hsc_group = $request->hsc_group;
        $new->hsc_year = $request->hsc_year;
        $new->hsc_gpa = $request->hsc_gpa;
        $new->bachelor_institute_type = $request->bachelor_institute_type;
        $new->bachelor_institute = $request->bachelor_institute;
        $new->bachelor_study_type = $request->bachelor_study_type;
        $new->bachelor_department = $request->bachelor_department;
        $new->bachelor_curriculam = $request->bachelor_curriculam;
        $new->bachelor_year = $request->bachelor_year;
        $new->bachelor_gpa = $request->bachelor_gpa;
        $new->Tuition_District = $request->Tuition_District;
        $new->Tutor_Location = implode(',',$request->Tutor_Location);
        $new->medium = implode(',',$request->medium);
        $new->class = implode(',',$request->class);
        $new->subject = $request->subject;
        $new->day = implode(',',$request->day);
        $new->shift = implode(',',$request->shift);
        $new->salary = $request->salary;
        $new->tutoring_style = implode(',',$request->tutoring_style);
        $new->experience = $request->experience;
        $new->email = $request->email;
        $new->phone = $request->phone;
        $new->additional_phone = $request->additional_phone;
        $new->name = $request->name;
        $new->gender = $request->gender;
        $new->district = $request->district;
        $new->area = $request->area;
        $new->permanent_location = $request->permanent_location;
        $new->father_name = $request->father_name;
        $new->father_phone = $request->father_phone;
        $new->mother_name = $request->mother_name;
        $new->mother_phone = $request->mother_phone;
        $new->guardian_phone = $request->guardian_phone;
        $new->guardian_relationship = $request->guardian_relationship;
        $new->yourself = $request->yourself;
        $new->image = $imageName;
        $new->document_title = $request->document_title;
        $new->file = $fileName;
        $new->status = "accept";
        
        $new->save();
        return redirect()->back()->with('success', 'Account Update Successfully');
    }
    public function teacher_security()
    {
        $teacherid = Auth::user()->id;
        $data = TeacherDetail::where('teacherid', $teacherid)->first();
        return view('teacher.teacher_security')->with('data', $data);
    }
    public function teacher_password_update(Request $request,$id)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8',
        ]);
        $teacher = Tutor::findOrFail($id);
        if (Hash::check($request->old_password, Auth::user()->password)) {
            if ($request->new_password == $request->confirm_password) {
                // Update password
                $teacher->password = Hash::make($request->new_password);
                $teacher->save();
                return redirect()->back()->with('success', 'Password updated successfully');
            } else {
                return redirect()->back()->with('error', 'New and confirm password do not match');
            }
        } else {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }
    }
    public function upload_video()
    {
        $teacherid = Auth::user()->id;
        $videos = DB::select('SELECT * FROM videos WHERE creatorid = ?', [$teacherid]);
        $data = TeacherDetail::where('teacherid', $teacherid)->first();
        return view('teacher.upload_video',compact('videos'))->with('data', $data);
    }
    public function video_post(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'video_file' => 'required',
        ]);
        $creatorid = Auth::user()->id;

        $video_file = $request->file('video_file');
        $video_fileName = time() . '.' . $video_file->getClientOriginalExtension();
        $video_file->move('video', $video_fileName);

        $new = new Video();
    
        $new->creatorid = $creatorid;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->video_file = $video_fileName;
        $new->status = "active";
        
        $new->save();
        return redirect()->route('teacher.upload_video')->with('success', 'Video Added Successfully');
    }
    public function notification()
    {
        $teacherid = Auth::user()->id;
        $data = TeacherDetail::where('teacherid', $teacherid)->first();
        $messages = DB::select('SELECT * FROM contacts WHERE teacherid = ? ORDER BY id DESC', [$teacherid]);
        return view('teacher.notification',compact('messages'))->with('data', $data);
    }
    public function job_apply(Request $request)
    {
        $applicant_id = Auth::user()->id;
        $email = Auth::user()->email;
        
        $teacherdetail = TeacherDetail::where('email', $email)->first();
        if(!empty($teacherdetail)) {
            $teacherdetailid = $teacherdetail->id;
        } else {
            $teacherdetailid = null;
        }
        // dd($teacherdetailid);

        $job_id = $request->job_id;
        $teacher = TeacherDetail::where('teacherid', $applicant_id)->first();
        $job = JobApplication::where('applicant_id', $teacherdetailid)
                     ->where('job_id', $job_id)
                     ->first();
        // dd($job);
        if(!empty($teacher)){
            $teacherStatus = $teacher->status;
        }
        else{
            $teacherStatus = null;
        }
        

        

        if($teacherStatus == "accept"){
            if(empty($job)){
                $new = new JobApplication();
                $new->job_id = $request->job_id;
                $new->creatorid = $request->creatorid;
                $new->applicant_id = $teacherdetailid;
                $new->status = "panding";
                $new->save();
                
                return redirect()->back()->with('success', 'Application Successfully');
            }
            else{
                return redirect()->back()->with('error', 'You Are Allredy Apply');
            }
            
        }
        else{
            return redirect()->back()->with('error', 'Please Update Your Profile');
        }
        
    }
}
