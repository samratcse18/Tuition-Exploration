<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tutor List</title>
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
                <h1 class="lg:text-[20px] text-[16px]">Showing <span class="text-[#c30c81] font-semibold">1-10</span> of <span class="text-[#c30c81] font-semibold">2000</span> Tutors</h1>
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
        <div class="lg:py-[50px] py-4 lg:px-[50px] px-4">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-8">
                @foreach ($datas as $data)
                    @if ($data->status == 'accept')
                        <div class="shadow-2xl py-[20px] bg-[#ffffff] border-[1px] border-solid border-gray-400 rounded-md transform transition-transform duration-300">
                            <div class="flex justify-center items-center">
                                <a href='tutor-details/{{ $data->id }}'><img class="h-[200px] lg:h-[200px] w-[100%]" src="{{ asset('documents/' . $data->image) }}" alt=""></a>
                            </div>
                            <div class="px-[20px] pt-[10px] text-[#54595F] text-center">
                                <div class="py-[2px] lg:text-[32px] text-[24px] font-bold">
                                    <a href='tutor-details/{{ $data->id }}' class="text-[#05264e] hover:text-[#3c65f5]">{{$data->name}}</a>
                                </div>
                                <div class="py-[2px]">
                                    <p>{{$data->bachelor_institute}}</p>
                                </div>
                                <div class="py-[2px] lg:text-[24px] text-[20px] font-semibold">
                                    <h1 class="text-[#05264e]">{{$data->bachelor_department}}</h1>
                                </div>
                                <div class="py-[2px] lg:text-[32px] text-[24px] font-bold">
                                    <h1 class="text-[#05264e] lg:text-[24px] text-[20px] font-semibold hover:text-[#3c65f5] cursor-pointer"><i class="fa fa-map-marker text-red-600"></i>
                                        {{$data->area}}, {{$data->district}}</h1>
                                </div>
                                <div class="bg-[#ba0c7d] hover:bg-[#8f096c] text-[18px] my-2 py-1 px-2 text-white font-semibold">
                                    <a href='tutor-details/{{ $data->id }}'>View Details</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
            
        {{-- <footer>
            @include('index_footer')
        </footer> --}}
    </main>
</body>

</html>
