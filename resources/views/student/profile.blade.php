<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Profile</title>
</head>
<body>
    <header>
        @include('student/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('student/sidebar')
    @php
        $pending = 0;
        $accepted = 0;
    @endphp
    @foreach ($datas as $data)
        @if ($data->status == 'pending')
            @php
                $pending++;
            @endphp
        @endif
        @if ($data->status == 'accepted')
            @php
                $accepted++;
            @endphp
        @endif
    @endforeach
    @php
        use Carbon\Carbon;

        // Assuming $createdAt contains the created at time as a string
        $createdAt = Auth::user()->created_at;

        // Convert the string to a Carbon instance
        $createdAtCarbon = Carbon::parse($createdAt);

        // Substract one day from the created at time
        $newDate = $createdAtCarbon->subDay();

        // Format the new date as desired
        $formattedDate = $newDate->format('F d, Y');

        // echo $formattedDate; // Output: April 19, 2024

    @endphp
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5">
        <div class="flex lg:flex-row flex-col justify-between lg:space-y-0 space-y-5">
            <div class="lg:w-[60%] w-[100%] border-[1px] border-solid border-gray-400 p-4">
                <div class="flex justify-end">
                    <a href="{{ route('student.profile_update_page') }}"><button class="flex items-center bg-green-500 hover:bg-green-600 rounded-md text-white p-1 font-semibold"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg>Edit Profile</button></a>
                </div>
                <div>
                    <h1 class="text-[#05264e] text-[28px] font-bold">{{Auth::user()->name}}</h1>
                    <p class="text-[#05264e]">Phone: <span class="text-[22px] font-bold">{{Auth::user()->phone}}</span></p>
                </div>
                <div class="flex items-center border-[1px] border-solid border-gray-400 bg-[#f4b4c5] p-4 mt-3">
                    <strong>NB:</strong>
                    <p class="text-[#71132a] text-[14px]"> প্রোফাইল করতে যেকোনো সমস্যায় সম্মুখীন হলে আমাদের সার্পোট টিমে কল করুন +880 1722-111111</p>
                </div>
            </div>
            <div class="lg:w-[38%] w-[100%] border-[1px] border-solid border-gray-400 bg-[#fff] shadow-2xl">
                <div class="flex p-5">
                    <div class="flex justify-center items-center p-4">
                        <img class="h-[80px] w-[80px]" src="{{ asset('image/member.webp') }}" alt="">
                    </div>
                    <div>
                        <p class="text-[#05264e] text-[20px] font-semibold">Welcome to</p>
                        <p class="text-[#05264e] text-[24px] font-semibold">Guardian/Student Portal</p>
                        <hr>
                        <p class="text-[#05264e]">Member Since:</p>
                        <p class="text-[#05264e] text-[18px] font-semibold">{{$formattedDate}}</p>
                    </div>
                </div>
                <a href="{{ route('student.tutor_request') }}"><div class="flex justify-center items-center bg-[#c30c81] text-white mt-10 p-2 bottom-0">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <p>Post a New Tution Job</p>
                </div></a>
            </div>
        </div>
        <div class="my-5">
            <h1 class="text-[#05264e] text-[20px] font-semibold underline">Activity Status</h1>
        </div>
        <div class="flex lg:flex-row flex-col justify-between lg:space-y-0 space-y-2">
            <div class="flex items-center justify-between lg:w-[15%] w-[100%] p-4 text-white rounded-md" style="background-image: linear-gradient(0deg, #ff0844 0, #ffb199);">
                <div >
                    <p class="font-semibold text-[16px]">Pending</p>
                    <p class="opacity-50">verification processing</p>
                </div>
                <div>
                    <h1 class="font-semibold text-[22px]">{{$pending}}</h1>
                </div>
            </div>
            <div class="flex items-center justify-between lg:w-[15%] w-[100%] p-4 text-white rounded-md" style="background-image: radial-gradient(circle 248px at center, #16d9e3 0, #30c7ec 47%, #46aef7 100%);">
                <div >
                    <p class="font-semibold text-[16px]">Posted</p>
                    <p class="opacity-50">Posted in job board</p>
                </div>
                <div>
                    <h1 class="font-semibold text-[22px]">{{$accepted}}</h1>
                </div>
            </div>
            <div class="flex items-center justify-between lg:w-[15%] w-[100%] p-4 text-white rounded-md" style="background-image: linear-gradient(-20deg, #2b5876, #4e4376);">
                <div >
                    <p class="font-semibold text-[16px]">Assigned</p>
                    <p class="opacity-50">Tutor has been assigned</p>
                </div>
                <div>
                    <h1 class="font-semibold text-[22px]">0</h1>
                </div>
            </div>
            <div class="flex items-center justify-between lg:w-[15%] w-[100%] p-4 text-white rounded-md" style="background-image: linear-gradient(0deg, #0ba360 0, #3cba92);">
                <div >
                    <p class="font-semibold text-[16px]">Confirmed</p>
                    <p class="opacity-50">Tutor has been Confirmed</p>
                </div>
                <div>
                    <h1 class="font-semibold text-[22px]">0</h1>
                </div>
            </div>
            <div class="flex items-center justify-between lg:w-[15%] w-[100%] p-4 text-white rounded-md" style="background-image: linear-gradient(135deg, #667eea, #764ba2);">
                <div >
                    <p class="font-semibold text-[16px]">On Hold</p>
                    <p class="opacity-50">Revenue streams</p>
                </div>
                <div>
                    <h1 class="font-semibold text-[22px]">0</h1>
                </div>
            </div>
            <div class="flex items-center justify-between lg:w-[15%] w-[100%] p-4 text-white rounded-md" style="background-image: linear-gradient(90deg, #434343 0, #000);">
                <div >
                    <p class="font-semibold text-[16px]">Cancelled</p>
                    <p class="opacity-50">Revenue streams</p>
                </div>
                <div>
                    <h1 class="font-semibold text-[22px]">0</h1>
                </div>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col justify-between lg:space-y-0 space-y-2 lg:space-x-2 space-x-0 my-5">
            <div class="flex lg:flex-row flex-col justify-between items-center p-5 border-[1px] border-solid border-[rgba(0, 0, 0, .125)]">
                <div class="px-5">
                    <img class="lg:w-[400px] w-[250px]" src="{{ asset('image/customer-care.webp') }}" alt="">
                </div>
                <div class="text-[#05264e]">
                    <h6 class="text-[20px] font-semibold">You can also call us at:</h6>
                    <h4 class="text-[28px] font-bold"><a href="tel:+8801722111111">+880 1722-111111</a></h4>
                    <small class="text-[15px]">(10:00 AM - 10:10 PM)</small>
                    <div class="my-4">
                        <hr>
                    </div>
                    <p class="text-[15px]">For any kind of help or information contact with our support team</p>
                </div>
            </div>
            <div class="flex lg:flex-row flex-col justify-between items-center p-5 border-[1px] border-solid border-[rgba(0, 0, 0, .125)]">
                <div class="px-5">
                    <img class="lg:w-[400px] w-[250px]" src="{{ asset('image/fb_community.0b76e273.svg') }}" alt="">
                </div>
                <div class="text-[#05264e]">
                    <h6 class="text-[20px] font-semibold">Stay tuned by social communication</h6>
                    <h4 class="text-[28px] font-bold">Join Guardian Community</h4>
                    <button class="flex items-center bg-[#3f6ad8] hover:bg-[#3f6ad8e3] rounded-md text-white px-2 font-semibold">Join Now</button>
                    <div class="my-4">
                        <hr>
                    </div>
                    <p class="text-[15px]">Share your queries and experience with friends and family.</p>
                </div>
            </div>
        </div>
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>
