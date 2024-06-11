<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Details</title>
</head>

<body>
    @php
        use Carbon\Carbon;
    @endphp
    <header>
        @if (Auth::guard('student')->check())
            @include('student.index_nav_bar')
        @elseif (Auth::guard('tutor')->check())
            @include('teacher.index_nav_bar')
        @elseif (Auth::guard('admin')->check())
            @include('admin.navbar')
        @else
            @include('index_nav_bar')
        @endif
    </header>
    @include('partial/error_success')
    <main class="">
        @foreach ($datas as $data)
            @php
                $createdAt = $data->created_at;
                $updatedAt = $data->updated_at;

                $createdAtCarbon = Carbon::parse($createdAt);
                $updatedAtCarbon = Carbon::parse($updatedAt);

                $newcreatedAtDate = $createdAtCarbon->subDay();
                $newupdatedAtDate = $updatedAtCarbon->subDay();

                $formattedCreatedAtDate = $newcreatedAtDate->format('F d, Y');
                $formattedUpdatedAtDate = $newupdatedAtDate->format('F d, Y');

            @endphp
            <div class="py-[50px] lg:px-[200px] px-[10px]">
                <div class=" w-[100%] rounded-lg shadow-2xl bg-[#f8f9fa] transform transition-transform duration-300 hover:scale-[1.00]">
                    <div class="p-4 space-y-8">
                        <div class="text-center">
                            <h1 class="text-[#05264e] lg:text-[40px] text-[24px] font-bold">{{$data->teacher_gender}} Tutor Needed for Bangla Medium</h1>
                            <div class="flex space-x-4 justify-center text-[#4f5e64] lg:text-[18px]">
                                <h1>Job ID : {{$data->id}}</h1>
                                <h1>Created Date : {{$formattedCreatedAtDate}}</h1>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="lg:text-[24px] text-[20px] text-red-600"><i class="fa fa-map-marker"></i></h1>
                            <h1 class="text-[#05264e] lg:text-[24px] text-[20px] font-bold">{{$data->area}}, {{$data->district}}</h1>
                        </div>

                        <div class="grid lg:grid-cols-3 grid-cols-1 gap-2">
                            <h1>Class : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->class}}</span></h1>
                            <h1>Category : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->medium}}</span></h1>
                            <h1>Subject : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->subject}}</span></h1>
                            <h1>Student Gender : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->gender}}</span></h1>
                            <h1>Preferred Tutor : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->teacher_gender}}</span></h1>
                            <h1>Tutoring Time : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->time}}</span></h1>
                            <h1>Tutoring Days : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->day}}</span></h1>
                            <h1>No of Student : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->number_of_student}}</span></h1>
                        </div>
                        <div class="">
                            <h1>Tuition Fee : <span class="text-[18px] text-[#05264e] font-semibold">{{$data->salary}}</span></h1>
                        </div>
                        <div class="flex justify-between">
                            <h1><span class="text-[#3c65f5]">Other Requirements :</span> {{$data->extra_information}}</h1>
                            <h1 class="bg-white hover:bg-[#3c65f5] text-[18px] py-1 px-2 text-[#3c65f5] hover:text-white border-[1px] border-solid border-[#3c65f5] cursor-pointer">
                                <div class="flex items-center space-x-1">
                                    @if (Session::has('user'))
                                    <form action="{{ route('job_apply') }}" method="post">
                                        @csrf
                                        <input type="text" name="job_id" id="job_id" value="{{$data->id}}" hidden>
                                        <input type="text" name="creatorid" id="creatorid" value="{{$data->creatorid}}" hidden>
                                        <button type="submit" class="flex items-center space-x-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>
                                        <h1>Apply</h1></button> 
                                    </form>
                                    @else
                                        <a href="#" class="flex items-center space-x-1" disabled><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>
                                        <h1>Please Login Then Apply</h1></a>
                                    @endif
                                </div>
                            </h1>
                        </div>
                        <div class="flex justify-end">
                            <h1>Published Time : {{$formattedUpdatedAtDate}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
    <footer>
        @include('index_footer')
    </footer>
</body>

</html>
