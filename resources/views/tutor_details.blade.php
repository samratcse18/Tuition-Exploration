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
        <div class="lg:px-[100px] px-[10px] pt-[20px] py-4 underline text-[#05264e]">
            <h1 class="text-[32px]">TUTOR PROFILE</h1>
        </div>
        @foreach ($datas as $data)
            <div class="flex lg:flex-row flex-col lg:space-x-4 space-x-0 lg:space-y-0 space-y-4 pb-[50px] lg:px-[100px] px-[10px]">
                <div class="p-[30px] lg:w-[70%] w-[100%] rounded-lg shadow-2xl bg-[#f8f9fa]  border-[1px] border-solid border-gray-400">
                    <div class="flex lg:flex-row flex-col">
                        <div class="lg:w-[30%]">
                            <img class="h-[200px] lg:h-[200px] " src="{{ asset('documents/' . $data->image) }}" alt="">
                            <div class="mt-[20px]">
                                <h1>Member Since: {{ now()->format('Y-m-d') }}</h1>
                                <h1>Total views: 245</h1>
                            </div>
                        </div>
                        <div class="lg:w-[70%] lg:px-[30px] text-[#05264e]">
                            <div class="flex items-center">
                                <h1 class="w-[40%]">Name:</h1>
                                <h1 class="w-[60%] text-[28px] font-semibold font-['Nunito']">{{$data->name}}</h1>
                            </div>
                            <div class="flex">
                                <h1 class="w-[40%]">ID#:</h1>
                                <h1 class="w-[60%] font-semibold font-['Nunito']">TS-{{$data->id}}</h1>
                            </div>
                            <div class="flex">
                                <h1 class="w-[40%]">Gender:</h1>
                                <h1 class="w-[60%] font-semibold font-['Nunito']">{{$data->gender}}</h1>
                            </div>
                            <div class="flex">
                                <h1 class="w-[40%]">Qualification:</h1>
                                <h1 class="w-[60%] font-semibold font-['Nunito']">{{$data->bachelor_study_type}}</h1>
                            </div>
                            <div class="flex">
                                <h1 class="w-[40%]">Area Covered:</h1>
                                <h1 class="w-[60%] font-semibold font-['Nunito']">{{$data->Tuition_District}}({{$data->Tutor_Location}})</h1>
                            </div>
                            <div class="flex">
                                <h1 class="w-[40%]">Tutor Location:</h1>
                                <h1 class="w-[60%] font-semibold font-['Nunito']">{{$data->district}}({{$data->area}})</h1>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#6c2a8c] mt-[10px] p-[6px] text-white font-semibold">
                        Tution Info
                    </div>
                    <div class="lg:px-[30px] text-[#05264e]">
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Expected Minimum Salary</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->salary}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Current Status for Tuition</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">Available</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Days Per Week</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->day}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Preffered Tution Style</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->tutoring_style}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Place of Learning</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">Home Visit</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Extra Facilities</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">Phone help</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Preffered Medium of Version</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->medium}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Preffered Class</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->class}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Preffered Subjects</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->subject}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Preferred Time</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->shift}}</h1>
                        </div>
                        <div class="flex items-center py-2">
                            <h1 class="w-[40%]">Preffered Area to Teach</h1>
                            <h1 class="w-[60%] text-[20px] font-semibold font-['Nunito']">{{$data->Tuition_District}}, ({{$data->Tutor_Location}})</h1>
                        </div>
                    </div>
                    <div class="lg:px-[30px] text-[#05264e]">
                        <h1 class="text-[32px] text-[#05264e] font-semibold py-2">Educational Qualification</h1>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="text-xs text-white uppercase bg-[#6c2a8c]">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Exam Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Institute
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Group/Subject
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Result
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <th class="px-6 py-4">
                                            SSC / O-level / Dakhil
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$data->ssc_year}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->ssc_institute}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->ssc_group}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->ssc_gpa}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th class="px-6 py-4">
                                            Higher Secondary / HSC / A level / Alim
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$data->hsc_year}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->hsc_institute}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->hsc_group}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->hsc_gpa}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th class="px-6 py-4">
                                            Graduation / Bachelor / Diploma
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$data->bachelor_year}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->bachelor_institute}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->bachelor_department}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$data->bachelor_gpa}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="lg:w-[30%] w-[100%] border-[1px] border-solid border-gray-400 p-[20px]">
                    <h1 class="text-[#05264e] font-semibold text-[24px] pb-2 mb-2 font-['adobe-garamond-pro'] border-b border-gray-600">Contact with This tutor</h1>
                    <form action="{{ route('common_contact', ['id' => $data->teacherid]) }}" method="post">
                        @csrf
                        <div class="py-2">
                            <label for="name"
                                class="text-[#05264e] font-semibold text-[18px] font-['adobe-garamond-pro']">Name</label>
                            <input type="text" name="name"
                                class="name border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[40px] p-[10px] w-[100%]"
                                id="name" placeholder="Enter your full name">
                            @error('name')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="phone"
                                class="text-[#05264e] font-semibold text-[18px] font-['adobe-garamond-pro']">Phone Number</label>
                            <input type="number" name="phone"
                                class="phone border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[40px] p-[10px] w-[100%]"
                                id="phone" placeholder="Phone Number">
                            @error('phone')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="message"
                                class="text-[#05264e] font-semibold text-[18px] font-['adobe-garamond-pro']">Details Information</label>
                            <textarea type="text" name="message"
                                class="message border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[60px] p-[10px] w-[100%]"
                                id="message"></textarea>
                            @error('message')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-4 flex justify-center items-center">
                            <button type="submit"
                                class="text-white bg-[#92096d] py-[10px] px-6 hover:bg-[#000] hover:text-[#92096d] font-semibold">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pb-[50px] lg:px-[100px] px-[10px]">
                <span class="mb-3 text-[#05264e] lg:text-[28px] text-[24px] leading-[28px] font-semibold font-['Nunito,sans-serif'] border-b-[2px] border-[#05264e]">Video Section</span>
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-2 mt-5">
                    @foreach ($videos as $video)
                        <iframe class="lg:w-[420px] w-[100%] lg:h-[315px]" src="{{ asset('video/' . $video->video_file) }}" sandbox frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    @endforeach
                </div> 
            </div>
        @endforeach
    <footer>
        @include('index_footer')
    </footer>
</body>

</html>
