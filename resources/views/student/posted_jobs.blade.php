<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Posted Jobs</title>
</head>
<body>
    <header>
        @include('student/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('student/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5 my-5">
        <div class="flex justify-end my-2">
            <a href="{{ route('student.tutor_request') }}" class="flex items-center bg-[#2098ce] rounded-lg text-white font-semibold text-[16px] px-4 py-1">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                <h1> Create new job request</h1>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse">
              <thead>
                <tr class="bg-yellow-100">
                  <th class="px-4 py-2 text-left">Id</th>
                  <th class="px-4 py-2 text-left">Student Name</th>
                  <th class="px-4 py-2">Status</th>
                  <th class="px-4 py-2">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datas as $data)
                    <tr class="bg-green-100">
                        <td class="border px-4 py-2">#{{$data->id}}</td>
                        <td class="border px-4 py-2">
                            <p class="text-[#05264e] lg:text-[24px] text-[20px]  font-bold">{{$data->student_name}}</p>
                            <i class="fa fa-map-marker text-red-600 mr-1"></i>{{$data->area}}, {{$data->district}}
                        </td>
                        <td class="border px-4 py-2 text-center">
                            @if ($data->status == 'accepted')
                                <span class="rounded-lg text-black font-semibold text-[14px] px-4 py-1 uppercase" style="background-image: linear-gradient(0deg, #08ff18 0, #bdff99);">{{$data->status}}</span> 
                            @endif
                            @if ($data->status == 'pending')
                                <span class="rounded-lg text-white font-semibold text-[14px] px-4 py-1 uppercase" style="background-image: linear-gradient(0deg, #ff0844 0, #ffb199);">{{$data->status}}</span> 
                            @endif
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <a href='posted-jobs/posted-job-details/{{ $data->id }}'><button class="bg-[#2098ce] rounded-lg text-white font-semibold text-[16px] px-4 py-1">Details</button></a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>          
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>