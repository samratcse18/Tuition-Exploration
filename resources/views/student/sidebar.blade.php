<style>
    ::-webkit-scrollbar {
          width: 0.5em;
        }
        ::-webkit-scrollbar-thumb {
          background-color: transparent;
        }
        body {
          scrollbar-width: thin;
          scrollbar-color: transparent transparent;
        }
</style>
<div class="hidden lg:block w-[280px] pb-12 h-full fixed overflow-auto overscroll-y-none bg-[#fff]">
    <div class="p-[20px]">
    <!-- Sidebar content goes here -->
        <div class="rounded-md border-[1px] border-solid border-gray-400 pt-4" aria-label="submenu">
            <div class="flex justify-center items-center">
                <img class="h-[150px] lg:h-[150px] " src="{{ asset('image/teacher.webp') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center mt-2 text-[#05264e] font-semibold">
                <h1>{{Auth::user()->name}}</h1>
                <h1>(TS-77697)</h1>
            </div>
            <div class="my-5 py-2 bg-[#9d0a72]">
                <a href="{{ route('student.profile') }}"><h1 class="px-2 flex items-center text-white lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M326.6 104H110.4c-51.1 0-91.2 43.3-91.2 93.5V427c0 50.5 40.1 85 91.2 85h227.2c51.1 0 91.2-34.5 91.2-85V0L326.6 104zM153.9 416.5c-17.7 0-32.4-15.1-32.4-32.8V240.8c0-17.7 14.7-32.5 32.4-32.5h140.7c17.7 0 32 14.8 32 32.5v123.5l51.1 52.3H153.9z"></path></svg>
                    Dashboard</h1></a>
            </div>
            <div class="my-5 px-2">
                <a href="{{ route('student.tutor_request') }}"><h1 class="flex items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M326.6 104H110.4c-51.1 0-91.2 43.3-91.2 93.5V427c0 50.5 40.1 85 91.2 85h227.2c51.1 0 91.2-34.5 91.2-85V0L326.6 104zM153.9 416.5c-17.7 0-32.4-15.1-32.4-32.8V240.8c0-17.7 14.7-32.5 32.4-32.5h140.7c17.7 0 32 14.8 32 32.5v123.5l51.1 52.3H153.9z"></path></svg>
                    Tutor Request</h1></a>
            </div>
            <div class="my-5 px-2">
                <a href="{{ route('student.posted_jobs') }}"><h1 class="flex items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path></svg>
                    Posted Jobs</h1></a>
            </div>
            <div class="my-5 px-2">
                <a href="{{ route('student.profile_update_page') }}"><h1 class="flex items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg>
                    Update Profile</h1></a>
            </div>
            <div class="my-5 px-2">
                <a href="{{ route('student.logout') }}"><h1 class="flex items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
                    Logout</h1></a>
            </div>
        </div>
    </div>
</div>
<div id="sidebar" class="overflow-auto overscroll-y-none z-10 lg:hidden h-full fixed top-0 left-0  bg-[#fff] w-64 text-white transform -translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex justify-end p-4" >
        <div id="close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-[#a80b76]">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
        </div>
    </div>
    <div  class="rounded-md" aria-label="submenu">
        <div class="flex justify-center items-center">
            <img class="h-[100px] lg:h-[100px] " src="{{ asset('image/teacher.webp') }}" alt="">
        </div>
        <div class="flex flex-col justify-center items-center mt-2 text-[#05264e] font-semibold">
            <h1>{{Auth::user()->name}}</h1>
            <h1>(TS-77697)</h1>
        </div>
        <div class="my-5 py-2 bg-[#9d0a72]">
            <a href="{{ route('student.profile') }}"><h1 class="px-2 flex justify-center items-center text-white lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M326.6 104H110.4c-51.1 0-91.2 43.3-91.2 93.5V427c0 50.5 40.1 85 91.2 85h227.2c51.1 0 91.2-34.5 91.2-85V0L326.6 104zM153.9 416.5c-17.7 0-32.4-15.1-32.4-32.8V240.8c0-17.7 14.7-32.5 32.4-32.5h140.7c17.7 0 32 14.8 32 32.5v123.5l51.1 52.3H153.9z"></path></svg>
                Dashboard</h1></a>
        </div>
        <div class="my-5 px-2">
            <a href="{{ route('student.tutor_request') }}"><h1 class="flex justify-center items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M326.6 104H110.4c-51.1 0-91.2 43.3-91.2 93.5V427c0 50.5 40.1 85 91.2 85h227.2c51.1 0 91.2-34.5 91.2-85V0L326.6 104zM153.9 416.5c-17.7 0-32.4-15.1-32.4-32.8V240.8c0-17.7 14.7-32.5 32.4-32.5h140.7c17.7 0 32 14.8 32 32.5v123.5l51.1 52.3H153.9z"></path></svg>
                Tutor Request</h1></a>
        </div>
        <div class="my-5 px-2">
            <a href="{{ route('student.posted_jobs') }}"><h1 class="flex justify-center items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path></svg>
                Posted Jobs</h1></a>
        </div>
        <div class="my-5 px-2">
            <a href="{{ route('student.profile_update_page') }}"><h1 class="flex justify-center items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg>
                Update Profile</h1></a>
        </div>
        <div class="my-5 px-2">
            <a href="{{ route('student.logout') }}"><h1 class="flex justify-center items-center text-black lg:text-[18px] text-[16px] leading-[26px] font-['Nunito,sans-serif']">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
                Logout</h1></a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("dropdownButton2");
    const sidebar = document.getElementById("sidebar");
    const close = document.getElementById("close");

    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("-translate-x-full");
        });
    close.addEventListener("click", function () {
        sidebar.classList.toggle("-translate-x-full");
        });
    });
</script>

