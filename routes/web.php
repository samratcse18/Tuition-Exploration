<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/sign-up', [HomeController::class, 'sign_up'])->name('sign_up');
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/tuition-job', [HomeController::class, 'tuition_job'])->name('tuition_job');
    Route::get('/tuition-job/job-details/{id}', [HomeController::class, 'job_details'])->name('job_details');
    Route::get('/tutor-list', [HomeController::class, 'tutor_list'])->name('tutor_list');
    Route::get('/tutor-details/{id}', [HomeController::class, 'tutor_details'])->name('tutor_details');
    Route::post('/common-contact/{id}', [HomeController::class, 'common_contact'])->name('common_contact');
    //teacher
    Route::post('/teacher-create', [TutorController::class, 'create'])->name('teacher.create');
    Route::post('/teacher-doLogin', [TutorController::class, 'doLogin'])->name('teacher.doLogin');
    //student
    Route::post('/student-create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/student-doLogin', [StudentController::class, 'doLogin'])->name('student.doLogin');
    // tutor request
    Route::get('/tutor-request', [HomeController::class, 'tutor_request'])->name('tutor_request');
    Route::post('/doTutor-request', [HomeController::class, 'doTutor_request'])->name('tutor.request');
    // admin
    Route::get('/admin/login', [AdminController::class, 'admin_login_page'])->name('admin_login_page');
    Route::post('/admin-doLogin', [AdminController::class, 'doLogin'])->name('admin.doLogin');
    });

Route::middleware(['auth:admin'])->group(function () {
        Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
        Route::get('/admin-logout', [AdminController::class, 'admin_logout'])->name('admin.logout');
        Route::get('/student-request', [AdminController::class, 'student_request'])->name('student_request');
        Route::get('/student-request/delete_student_request/{id}', [AdminController::class, 'delete_student_request']);
        Route::get('/student-job-request', [AdminController::class, 'student_job_request'])->name('student.job_request');
        Route::get('/student-job-request/job-request-details/{id}', [AdminController::class, 'job_request_details'])->name('job_request_details');
        Route::post('/job-status-change/{id}', [AdminController::class, 'job_status_change'])->name('job_status_change');
        Route::get('/application', [AdminController::class, 'application'])->name('application');
    });

Route::middleware(['auth:tutor'])->group(function () {
        Route::get('/teacher-dashboard', [TutorController::class, 'teacher_dashboard'])->name('teacher.dashboard');
        Route::get('/teacher-logout', [TutorController::class, 'teacher_logout'])->name('teacher.logout');
        Route::get('/teacher-profile', [TutorController::class, 'teacher_profile'])->name('teacher.profile');
        Route::get('/teacher-profile-update', [TutorController::class, 'profile_update'])->name('teacher.profile_update');
        Route::post('/teacher-update-profile/{id}', [TutorController::class, 'teacher_update_profile'])->name('teacher.update_profile');
        Route::get('/teacher-security', [TutorController::class, 'teacher_security'])->name('teacher.security');
        Route::post('/teacher-password-update/{id}', [TutorController::class, 'teacher_password_update'])->name('teacher.password_update');
        Route::get('/upload_video', [TutorController::class, 'upload_video'])->name('teacher.upload_video');
        Route::post('/video-post/{id}', [TutorController::class, 'video_post'])->name('teacher.video_post');
        Route::get('/notification', [TutorController::class, 'notification'])->name('teacher.notification');
        Route::post('/job-apply', [TutorController::class, 'job_apply'])->name('job_apply');
    });

Route::middleware(['auth:student'])->group(function () {
        Route::get('/student-dashboard', [StudentController::class, 'student_dashboard'])->name('student.dashboard');
        Route::get('/student-logout', [StudentController::class, 'student_logout'])->name('student.logout');
        Route::get('/student-profile', [StudentController::class, 'student_profile'])->name('student.profile');
        Route::get('/student-tutor-request', [StudentController::class, 'student_tutor_request'])->name('student.tutor_request');
        Route::post('/job-create', [StudentController::class, 'job_create'])->name('job.create');
        Route::get('/posted-jobs', [StudentController::class, 'posted_jobs'])->name('student.posted_jobs');
        Route::get('/posted-jobs/posted-job-details/{id}', [StudentController::class, 'posted_job_details'])->name('posted_job_details');
        Route::get('/profile-update-page', [StudentController::class, 'profile_update_page'])->name('student.profile_update_page');
        Route::post('/info-update/{id}', [StudentController::class, 'info_update'])->name('student.info_update');
        Route::post('/password-update/{id}', [StudentController::class, 'password_update'])->name('student.password_update');
    });
