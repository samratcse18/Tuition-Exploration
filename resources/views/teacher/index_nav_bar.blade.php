<style>
    .nav_bg {
        background: linear-gradient(90deg, #540654, #cc0d85 50%, #540654 100%, #00d4ff 0);
        background-image: linear-gradient(90deg, rgb(84, 6, 84), rgb(204, 13, 133) 50%, rgb(84, 6, 84) 100%, rgb(0, 212, 255) 0px);
        background-position-x: initial;
        background-position-y: initial;
        background-size: initial;
        background-repeat-x: initial;
        background-repeat-y: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: initial;
    }

    .parent:hover .child {
        display: block;
    }

    .parent2:hover .child2 {
        display: block;
    }

    .bg {
        background: url({{ asset('image/footer.png') }});
    }
</style>
<nav class="fixed top-0 w-full z-10 lg:px-2 px-0 nav_bg">
    <div class="">
        <div class="hidden lg:block">
            <div class="flex justify-between items-center px-[150px] lg:h-[76px] h-[56px]">
                <div>
                    <a href="/">
                        <h1 class="w-[150px] text-yellow-400 text-[24px]"><img src="{{ asset('image/teacher.png') }}" alt=""></h1>
                    </a>
                </div>
                <div class="hidden lg:block">
                    <div class="flex justify-between items-center space-x-8">
                        <div>
                            <a href="{{ route('tuition_job') }}"><h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">TUITION JOBS</h1></a>
                        </div>
                        <div>
                            <a href="{{ route('tutor_list') }}"><h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">PREMIUM TUTORS</h1></a>
                        </div>
                        <div>
                            <a href="{{ route('tutor_request') }}"><h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">TUTOR REQUEST</h1></a>
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="relative">
                              <button class="text-yellow-400 text-[16px] font-bold hover:transition-colors hover:duration-300 uppercase">
                                Admin
                                <span class="text-[12px]">▼</span>
                              </button>
                              <div class="absolute z-10 hidden mt-2 py-2 w-32 bg-white rounded shadow-lg">
                                <a href="{{ route('teacher.profile') }}"
                                    class="flex items-center space-x-1 hover:bg-blue-500 py-[5px] pl-3 pr-4 text-black hover:text-white text-[16px]">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                                    <h1>Profile</h1>
                                </a>
                                <a href="{{ route('teacher.logout') }}"
                                    class="block hover:bg-blue-500 py-[5px] pl-3 pr-4 text-black hover:text-white text-[16px]">
                                    <i class="fa fa-sign-out-alt" style="font-size: 16px; color: black;"></i>
                                    Logout</a>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:hidden block w-full lg:w-auto mx-auto">
            <div class="flex justify-between items-center py-[8px] px-[5px]">
                <div>
                    <a href="/">
                        <h1 class="text-yellow-400 text-[24px]"><img class="w-[100px] h-[40px] scale-y-[2.5]" src="{{ asset('image/teacher.png') }}" alt=""></h1>
                    </a>
                </div>
                <button data-collapse-toggle="navbar-search" type="button" id="dropdownButton2"
                    class="inline-flex items-center p-2 text-sm text-white md:hidden" aria-controls="navbar-search"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div id="dropdownMenu" class="text-white hidden bg items-center justify-between w-full md:flex md:w-auto">
                <div
                    class="flex flex-col justify-center items-center space-y-2 p-3 pt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium dark:border-gray-700">
                    <div>
                        <a href="{{ route('tuition_job') }}"><h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">TUITION JOBS</h1></a>
                    </div>
                    <div>
                        <a href="{{ route('tutor_list') }}"><h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">PREMIUM TUTORS</h1></a>
                    </div>
                    <div>
                        <a href="{{ route('tutor_request') }}"><h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">TUTOR REQUEST</h1></a>
                    </div>
                    <div>
                        <a href="{{ route('teacher.logout') }}"
                            class="block border-2 border-white hover:bg-blue-500 py-[5px] pl-3 pr-4 text-[16px]"><i
                                class="fa fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="lg:mt-[76px] mt-[56px]"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script>
    // JavaScript code to handle the dropdown functionality
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownButton.addEventListener("click", function() {
        dropdownMenu.classList.toggle("hidden");
    });

    // Close the dropdown menu when clicking outside of it
    window.addEventListener("click", function(event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add("hidden");
        }
    });
</script>
<script>
    // JavaScript to toggle dropdown menu
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelector('.relative').addEventListener('click', function() {
        var dropdownMenuProfile = this.querySelector('.absolute');
        dropdownMenuProfile.classList.toggle('hidden');
      });
    });
  </script>
{{-- <style>
  .nav_bg{
            background: linear-gradient(90deg,#540654,#cc0d85 50%,#540654 100%,#00d4ff 0);
            background-image: linear-gradient(90deg, rgb(84, 6, 84), #cc0d85 50%, rgb(84, 6, 84) 100%, rgb(0, 212, 255) 0px);
            background-position-x: initial;
            background-position-y: initial;
            background-size: initial;
            background-repeat-x: initial;
            background-repeat-y: initial;
            background-attachment: initial;
            background-origin: initial;
            background-clip: initial;
            background-color: initial;
        }
</style>
<nav class="nav_bg fixed top-0 w-full h-[58px] z-10 border-gray-200 px-2  sm:px-4">
    <div class="flex justify-between lg:items-center py-[9px] lg:py-0 space-x-2 lg:px-[5%]">
      <div class="hidden lg:block">
        <a href="/">
            <h1 class="w-[200px] text-yellow-400 text-[24px]">Tution-Exploration</h1>
        </a>
      </div>
      <div class="hidden lg:block">
        <div class="flex justify-between space-x-[60px]">
            <h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">TUITION JOBS</h1>
            <h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">PREMIUM TUTORS</h1>
            <h1 class="text-white text-[16px] font-bold border-b-2 border-transparent hover:border-blue-500 hover:transition-colors hover:duration-300">TUTOR REQUEST</h1>
        </div>
      </div>
      <div class="w-full lg:w-auto  lg:flex lg:justify-between lg:items-center mx-auto">
        <div class="flex justify-between items-center md:order-2">
            <div class="lg:hidden block">
                <a href="/">
                    <h1 class="w-[200px] text-yellow-400 text-[24px]">Tution-Exploration</h1>
                </a>
            </div>
          <button data-collapse-toggle="navbar-search" type="button" id="dropdownButton" class="inline-flex items-center p-2 text-sm text-white md:hidden" aria-controls="navbar-search" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        <div id="dropdownMenu"  class="bg-[#cc0d85]  items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <ul class="flex flex-col justify-center items-center p-3 lg:mt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium   dark:border-gray-700">
              <li>
                <a href="{{ route('sign_up') }}" class="block border-2 border-white hover:bg-blue-500 py-[5px] pl-3 pr-4 text-white text-[16px]"><i class="fa fa-sign-out-alt" style="font-size: 16px; color: white;"></i> Register</a>
              </li>
              <li>
                <a href="{{ route('login') }}" class="block border-2 border-white hover:bg-blue-500 py-[5px] pl-3 pr-4 text-white text-[16px]"><i class="fa fa-sign-out-alt" style="font-size: 16px; color: white;"></i> Login</a>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="mt-[62px]"></div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
      <script>
          // JavaScript code to handle the dropdown functionality
          const dropdownButton = document.getElementById("dropdownButton");
          const dropdownMenu = document.getElementById("dropdownMenu");

          dropdownButton.addEventListener("click", function() {
              dropdownMenu.classList.toggle("hidden");
          });

          // Close the dropdown menu when clicking outside of it
          window.addEventListener("click", function(event) {
              if (!dropdownButton.contains(event.target)) {
                  dropdownMenu.classList.add("hidden");
              }
          });
      </script> --}}
