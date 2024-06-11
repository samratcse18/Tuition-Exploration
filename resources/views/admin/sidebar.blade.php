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
        <div  class="p-5 rounded-md" aria-label="submenu"style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
            <div class="border-b border-gray-600">
                <h1 class="mb-3 text-[#05264e] lg:text-[28px] text-[20px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Admin Filter</h1>
            </div>
            <div class="my-5">
                <a href="{{ route('admin.dashboard') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Deshboard</h1></a>
            </div>
            <div class="my-5">
                <a href="{{ route('student_request') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Common Request</h1></a>
            </div>
            <div class="my-5">
                <a href="{{ route('student.job_request') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Student Job Request</h1></a>
            </div>
            <div class="my-5">
                <a href="{{ route('application') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Application</h1></a>
            </div>
        </div>
    </div>
</div>
<div id="sidebar" class="overflow-auto overscroll-y-none z-10 lg:hidden h-full fixed top-0 left-0 bg-[#fff] w-64 text-black transform -translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex justify-end p-4" >
        <div id="close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-[#a80b76]">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
        </div>
    </div>
    <div class="px-4 w-[250px]  rounded-md" aria-label="submenu">
        <div class="border-b border-gray-600">
            <h1 class="mb-3 text-[#05264e] lg:text-[28px] text-[20px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Admin Filter</h1>
        </div>
        <div class="my-5">
            <a href="{{ route('admin.dashboard') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Deshboard</h1></a>
        </div>
        <div class="my-5">
            <a href="{{ route('student_request') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Common Request</h1></a>
        </div>
        <div class="my-5">
            <a href="{{ route('student.job_request') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Student Job Request</h1></a>
        </div>
        <div class="my-5">
            <a href="{{ route('application') }}"><h1 class="text-black lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Application</h1></a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("dropdownButton");
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
<script src="{{ asset('js/location.js') }}"></script>
<script src="{{ asset('js/education.js') }}"></script>
<script src="{{ asset('js/location-sidebar-mobile-view.js') }}"></script>
<script src="{{ asset('js/education-sidebar-mobile-view.js') }}"></script>

