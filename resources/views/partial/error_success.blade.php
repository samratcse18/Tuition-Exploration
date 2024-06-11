
<div id="successModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
    {{-- <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;

        <div class="inline-block align-bottom bg-green-400 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="flex justify-end">
                <div id="successCloseButton" class="bg-white cursor-pointer p-1">
                    <i class="fa fa-times mx-1" style="font-size: 24px; color: #cc0000;"></i>
                </div>
            </div>
            <div class="bg-green-300 px-4 py-5 sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Success icon goes here (e.g., checkmark) -->
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Success</h3>
                        <div class="mt-2">
                            <p class="text-sm text-black">{{Session::get('success')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="flex justify-end pt-4 px-4 pb-20 text-center">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:h-screen">&#8203;</span>
        <div class="mt-4 mr-4 my-auto inline-block bg-green-400 rounded-lg text-left overflow-hidden shadow-xl transform transition-all ">
            <div class="flex justify-between">
              <div class="flex items-center space-x-4 p-1">
                  <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                      <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                  </div>
                  <p class="text-sm text-black pr-4">{{Session::get('success')}}</p>
              </div>
                <div id="successCloseButton" class="flex justify-center items-center font-semibold bg-white cursor-pointer p-1">
                    <h1 class="mx-1 text-green-400 text-[20px]">✕</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="errorModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
    {{-- <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;

        <div class="inline-block align-bottom bg-red-400 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="flex justify-end">
                <div id="errorCloseButton" class="bg-white cursor-pointer p-1">
                    <i class="fa fa-times mx-1" style="font-size: 24px; color: #cc0000;"></i>
                </div>
            </div>
            <div class="bg-red-300 px-4 py-5 sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Error icon goes here (e.g., cross) -->
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Error</h3>
                        <div class="mt-2">
                            <p class="text-sm text-black">{{Session::get('error')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="flex justify-end pt-4 px-4 pb-20 text-center">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block  sm:h-screen">&#8203;</span>
        <div class="mt-4 mr-4 my-auto inline-block bg-red-400 rounded-lg text-left overflow-hidden shadow-xl transform transition-all ">
            <div class="flex justify-between">
                <div class="flex items-center space-x-4 p-1">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                    </div>
                    <p class="text-sm text-white pr-4">{{Session::get('error')}}</p>
                </div>
                <div id="errorCloseButton" class="flex justify-center items-center font-semibold bg-white cursor-pointer p-1">
                    <h1 class="mx-1 text-red-400 text-[20px]">✕</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@if (Session::has('success'))
        <script>
            document.getElementById("successModal").classList.remove("hidden");
            setTimeout(function() {
                document.getElementById("successModal").classList.add("hidden");
            }, 3000);
            document.getElementById("successCloseButton").addEventListener("click", function() {
            document.getElementById("successModal").classList.add("hidden");
            });
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            document.getElementById("errorModal").classList.remove("hidden");
            setTimeout(function() {
                document.getElementById("errorModal").classList.add("hidden");
            }, 3000); 
            document.getElementById("errorCloseButton").addEventListener("click", function() {
            document.getElementById("errorModal").classList.add("hidden");
            });
        </script>
    @endif