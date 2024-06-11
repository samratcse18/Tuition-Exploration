<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Deshboard</title>
</head>
<body>
    <header>
        @include('admin/navbar')
    </header>
    @include('partial/error_success')
    @include('admin/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5">
        <div class="flex lg:flex-row flex-col justify-between lg:space-y-0 space-y-5">
            <div class="lg:w-[60%] w-[100%] border-[1px] border-solid border-gray-400 p-4">
                <div class="flex justify-end">
                    <a href="#"><button class="flex items-center bg-green-500 hover:bg-green-600 rounded-md text-white p-1 font-semibold"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg>Edit Profile</button></a>
                </div>
                <div>
                    <h1 class="text-[#05264e] text-[28px] font-bold">{{Auth::user()->name}}</h1>
                    <div class="flex space-x-1 items-center">
                        <h1 class="text-[#05264e] items-center">Email:</h1>
                        <h1 class="text-[20px] font-semibold">{{Auth::user()->email}}</h1>
                    </div>
                    <div class="flex space-x-1 items-center">
                        <h1 class="text-[#05264e] items-center">Phone:</h1>
                        <h1 class="text-[20px] font-semibold">{{Auth::user()->phone}}</h1>
                    </div>
                </div>
                <div class="flex items-center border-[1px] border-solid border-gray-400 bg-[#f4b4c5] p-4 mt-3">
                    <strong>NB:</strong>
                    <p class="text-[#71132a] text-[14px]"> প্রোফাইল করতে যেকোনো সমস্যায় সম্মুখীন হলে আমাদের সার্পোট টিমে কল করুন +880 1722-111111</p>
                </div>
            </div>
            <div class="lg:w-[38%] w-[100%] border-[1px] border-solid border-gray-400 bg-[#fff] shadow-2xl">
                <div class="flex p-5">
                    <div class="flex justify-center items-center p-4">
                        <img class="h-[80px] w-[80px]" src="{{ asset('image/location_map.svg') }}" alt="">
                    </div>
                    <div>
                        <p class="text-[#05264e] text-[20px] font-bold">Total: 0</p>
                        <p class="text-[#05264e]">Jobs on your prefeard locations</p>
                        <hr class="my-2">
                        <p class="text-[#05264e]">Your Tuition Area:</p>
                        <p class="text-[#05264e] text-[18px] font-semibold">Dhaka, Bangladesh</p>
                    </div>
                </div>
                <a href="#"><div class="flex justify-center items-center bg-[#c30c81] text-white mt-10 p-2 bottom-0">
                    <p>View Jobs</p>
                </div></a>
            </div>
        </div>
        <div class="my-5">
            <h1 class="text-[#05264e] text-[20px] font-semibold underline">Apply Status</h1>
        </div>
        <div class="flex lg:flex-row flex-col justify-between lg:space-x-2 space-x-0">
            <div class="w-[100%] border-[1px] border-solid border-gray-400 bg-[#fff] shadow-2xl">
                <div class="flex ">
                    <div class="flex justify-center items-center p-4">
                        <img class="h-[70px] w-[70px]" src="{{ asset('image/teacher/credit-card-credit-svgrepo-com.6270ef9e.svg') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center text-[#05264e] text-[20px] font-semibold">
                        <h1>Common Request</h1>
                        <h1 class="text-[24px] font-bold">0</h1>
                    </div>
                </div>
                <a href="{{ route('student_request') }}"><div class="flex justify-center items-center p-2 bg-gray-100 text-gray-500 hover:text-blue-500 border-t-[1px] border-solid border-gray-400">
                    <p>View List</p>
                </div></a>
            </div>
            <div class="w-[100%] border-[1px] border-solid border-gray-400 bg-[#fff] shadow-2xl">
                <div class="flex ">
                    <div class="flex justify-center items-center p-4">
                        <img class="h-[70px] w-[70px]" src="{{ asset('image/teacher/batch-services-svgrepo-com.33fef2a0.svg') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center text-[#05264e] text-[20px] font-semibold">
                        <h1>Student Job Request</h1>
                        <h1 class="text-[24px] font-bold">0</h1>
                    </div>
                </div>
                <a href="{{ route('student.job_request') }}"><div class="flex justify-center items-center p-2 bg-gray-100 text-gray-500 hover:text-blue-500 border-t-[1px] border-solid border-gray-400">
                    <p>View List</p>
                </div></a>
            </div>
            <div class="w-[100%] border-[1px] border-solid border-gray-400 bg-[#fff] shadow-2xl">
                <div class="flex ">
                    <div class="flex justify-center items-center p-4">
                        <img class="h-[70px] w-[70px]" src="{{ asset('image/teacher/confirm-svgrepo-com.b198775f.svg') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center text-[#05264e] text-[20px] font-semibold">
                        <h1>Application</h1>
                        <h1 class="text-[24px] font-bold">0</h1>
                    </div>
                </div>
                <a href="{{ route('application') }}"><div class="flex justify-center items-center p-2 bg-gray-100 text-gray-500 hover:text-blue-500 border-t-[1px] border-solid border-gray-400">
                    <p>View List</p>
                </div></a>
            </div>
            <div class="w-[100%] border-[1px] border-solid border-gray-400 bg-[#fff] shadow-2xl">
                <div class="flex ">
                    <div class="flex justify-center items-center p-4">
                        <img class="h-[70px] w-[70px]" src="{{ asset('image/teacher/cancel-svgrepo-com (1).dda4d7b1.svg') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center text-[#05264e] text-[20px] font-semibold">
                        <h1>Cancelled Jobs</h1>
                        <h1 class="text-[24px] font-bold">0</h1>
                    </div>
                </div>
                <a href="#"><div class="flex justify-center items-center p-2 bg-gray-100 text-gray-500 hover:text-blue-500 border-t-[1px] border-solid border-gray-400">
                    <p>View List</p>
                </div></a>
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
</body>
</html>
