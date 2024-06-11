<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job</title>
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
    <header>
        @include('sidebar')
    </header>
    <main class="lg:ml-[300px] ml-0 mb-[100px] lg:mb-0">
        <div class="lg:hidden flex justify-between px-4 py-2">
            <div class="border-b border-gray-600">
                <h1 class="mb-1 text-[#05264e] lg:text-[28px] text-[20px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tuition Jobs</h1>
            </div>
            <button id="menu_toggle" class="text-white px-1 text-[14px] rounded-md bg-[#c30c81] flex items-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="14px" width="14px" xmlns="http://www.w3.org/2000/svg"><path d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z"></path></svg>
                <h1>Filter</h1>
            </button>
        </div>
        <div class="flex justify-between items-center py-4 lg:px-[50px] px-4">
            <div>
                <h1 class="lg:text-[20px] text-[16px]">Showing <span class="text-[#c30c81] font-semibold">1-10</span> of <span class="text-[#c30c81] font-semibold">2000</span> jobs</h1>
            </div>
            <div>
                <select name="items" id="items"
                        class="items border-[1px] border-solid border-[#b4c0e0]  h-[30px] px-[5px] w-[100%]">
                    <option value="5">5</option>
                    <option selected value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
        </div>
        @foreach ($datas as $data)
            @if ($data->status == 'accepted')
                <div class="lg:py-[50px] py-4 lg:px-[50px] px-4">
                    <div class="lg:h-[400px] w-[100%] rounded-lg shadow-2xl bg-[#f8f9fa] transform transition-transform duration-300 hover:scale-[1.00]">
                        <div class="p-4 lg:space-y-8 space-y-4">
                            <div class="flex lg:flex-row flex-col justify-between items-center">
                                <h1 class="text-[#05264e] lg:text-[24px] text-[20px] font-semibold hover:text-[#3c65f5] cursor-pointer"><i class="fa fa-map-marker text-red-500"></i>
                                    {{$data->area}}, {{$data->district}}</h1>
                                <div class="border-[1px] border-solid border-[#3c65f5] p-1">
                                    Job id: {{$data->id}}
                                </div>
                            </div>
                            <div class="text-[#05264e] lg:text-[28px] text-[24px] font-semibold cursor-pointer">
                                <a href='tuition-job/job-details/{{ $data->id }}'>{{$data->teacher_gender}} Tutor Needed for {{$data->teacher_gender}}</a>
                            </div>
                            <div class="space-x-2">
                                <span class="bg-[#9a1eb1] text-white text-[16px] rounded-md mx-auto py-1 px-2">
                                    <i class="fa fa-home"></i> {{$data->type}} Tutoring
                                </span>
                                @php
                                    $createdAt = Carbon::parse($data->created_at);
                                    $now = Carbon::now();
                                    $difference = $now->diffInDays($createdAt);
                                @endphp
                                <span class="bg-[#1089ad] text-white text-[16px] rounded-md mx-auto py-1 px-2">
                                    <i class="fas fa-clock"></i> {{$difference}} day ago
                                </span>
                            </div>
                            <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center">
                                <h1>Category : <span class="text-[20px]">{{$data->medium}}</span></h1>
                                <h1>Class : <span class="text-[20px]">{{$data->class}}</span></h1>
                                <h1>Subjects : <span class="text-[20px]">{{$data->subject}}</span></h1>
                            </div>
                            <div>
                                <h1>Salary: <span class="text-[20px] text-[#3c65f5] font-semibold">{{$data->salary}}</span>/Month</h1>
                            </div>
                            <div class="flex justify-between">
                                <h1><span class="text-[#3c65f5]">Other Requirements :</span> {{$data->extra_information}}</h1>
                                <span class="bg-[#ba0c7d] hover:bg-[#8f096c] text-[18px] py-1 px-2 text-white">
                                    <a href='tuition-job/job-details/{{ $data->id }}'>View Details</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        {{-- <footer>
            @include('index_footer')
        </footer> --}}
    </main>
</body>

</html>
