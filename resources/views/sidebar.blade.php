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
<div class="hidden lg:block w-[300px] pb-12 h-full fixed overflow-auto overscroll-y-none">
    <div class="p-[20px]">
    <!-- Sidebar content goes here -->
        <div  class="px-4 w-[250px] rounded-md" aria-label="submenu">
            <div class="border-b border-gray-600">
                <h1 class="mb-3 text-[#05264e] lg:text-[28px] text-[20px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Advance Filter</h1>
            </div>
            <div class="my-5">
                <h1 class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tuition Type</h1>
            </div>
            <div>
                <div class="flex justify-between items-center my-2">
                    <div class="flex items-center">
                        <input type="radio" id="type1" name="typeGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                        <label for="type1" class="ml-2 text-gray-700">All Tuition</label>
                    </div>
                    <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zM128 120c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm0 96c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm0 96c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm288-136v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12zm0 96v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12zm0 96v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12z"></path></svg>
                </div>
                <div class="flex justify-between items-center my-2">
                    <div class="flex items-center">
                        <input type="radio" id="type2" name="typeGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                        <label for="type2" class="ml-2 text-gray-700">Home Tuition</label>
                    </div>
                    <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
                </div>
                <div class="flex justify-between items-center my-2">
                    <div class="flex items-center">
                        <input type="radio" id="type3" name="typeGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                        <label for="type3" class="ml-2 text-gray-700">Online Tuition</label>
                    </div>
                    <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z"></path></svg>
                </div>
            </div>
            <div class="my-5">
                <h1 class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tutor Preferance</h1>
            </div>
            <div>
                <div class="flex justify-between items-center my-2">
                    <div class="flex items-center">
                        <input type="radio" id="gender1" name="genderGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                        <label for="gender1" class="ml-2 text-gray-700">All</label>
                    </div>
                    <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M564 0h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-48.7 48.7C422.5 72.1 396.2 64 368 64c-33.7 0-64.6 11.6-89.2 30.9 14 16.7 25 36 32.1 57.1 14.5-14.8 34.7-24 57.1-24 44.1 0 80 35.9 80 80s-35.9 80-80 80c-22.3 0-42.6-9.2-57.1-24-7.1 21.1-18 40.4-32.1 57.1 24.5 19.4 55.5 30.9 89.2 30.9 79.5 0 144-64.5 144-144 0-28.2-8.1-54.5-22.1-76.7l48.7-48.7 16.9 16.9c2.4 2.4 5.4 3.5 8.4 3.5 6.2 0 12.1-4.8 12.1-12V12c0-6.6-5.4-12-12-12zM144 64C64.5 64 0 128.5 0 208c0 68.5 47.9 125.9 112 140.4V400H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v36c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-36h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-51.6c64.1-14.6 112-71.9 112-140.4 0-79.5-64.5-144-144-144zm0 224c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
                </div>
                <div class="flex justify-between items-center my-2">
                    <div class="flex items-center">
                        <input type="radio" id="gender2" name="genderGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                        <label for="gender2" class="ml-2 text-gray-700">Male</label>
                    </div>
                    <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M372 64h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-80.7 80.7c-22.2-14-48.5-22.1-76.7-22.1C64.5 160 0 224.5 0 304s64.5 144 144 144 144-64.5 144-144c0-28.2-8.1-54.5-22.1-76.7l80.7-80.7 16.9 16.9c7.6 7.6 20.5 2.2 20.5-8.5V76c0-6.6-5.4-12-12-12zM144 384c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
                </div>
                <div class="flex justify-between items-center my-2">
                    <div class="flex items-center">
                        <input type="radio" id="gender3" name="genderGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                        <label for="gender3" class="ml-2 text-gray-700">Female</label>
                    </div>
                    <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 288 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 176c0-79.5-64.5-144-144-144S0 96.5 0 176c0 68.5 47.9 125.9 112 140.4V368H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v36c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-36h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-51.6c64.1-14.5 112-71.9 112-140.4zm-224 0c0-44.1 35.9-80 80-80s80 35.9 80 80-35.9 80-80 80-80-35.9-80-80z"></path></svg>
                </div>
            </div>
            <div class="mt-5">
                <div class="py-2">
                    <label for="Tuition_District"
                        class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tuition
                        District </label>
                    <select name="Tuition_District" id="Tuition_District" onclick="upazilaList()"
                        class="Tuition_District border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">

                    </select>
                    @error('Tuition_District')
                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="Tutor_Location"
                        class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Select Area</label>
                    <select name="Tutor_Location" id="Tutor_Location"
                        class="Tutor_Location border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">
                        <option selected value="all">All</option>
                    </select>
                    @error('Tutor_Location')
                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <div class="py-2">
                    <label for="medium"
                        class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Select Medium</label>
                    <select name="medium" id="medium" onclick="classlist()"
                        class="medium border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">
                        <option selected value="all">All</option>
                        <option value="Bangla Medium">Bangla Medium</option>
                        <option value="English Version">English Version</option>
                        <option value="English Medium">English Medium</option>
                        <option value="Religious Studies">Religious Studies</option>
                        <option value="Admission Test">Admission Test</option>
                        <option value="Professional skill Development">Professional skill Development</option>
                        <option value="Arts">Arts</option>
                        <option value="Special Skill Development">Special Skill Development</option>
                        <option value="Uni Help">Uni Help</option>
                        <option value="Language Learning">Language Learning</option>
                        <option value="Test Preparation">Test Preparation</option>
                        <option value="Madrasa Medium">Madrasa Medium</option>
                        <option value="Special Child Education">Special Child Education</option>
                    </select>
                    @error('medium')
                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="class"
                        class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Select Class</label>
                    <select name="class" id="class"
                        class="class border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">
                        <option selected value="all">All</option>
                    </select>
                    @error('class')
                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sidebar" class="overflow-auto overscroll-y-none z-10 lg:hidden h-full fixed top-0 left-0 bg-white w-64 text-white transform -translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex justify-end p-4" >
        <div id="close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-[#a80b76]">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
        </div>
    </div>
    <div  class="px-4 w-[250px] rounded-md" aria-label="submenu">
        <div class="border-b border-gray-600">
            <h1 class="mb-3 text-[#05264e] lg:text-[28px] text-[20px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Advance Filter</h1>
        </div>
        <div class="my-5">
            <h1 class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tuition Type</h1>
        </div>
        <div>
            <div class="flex justify-between items-center my-2">
                <div class="flex items-center">
                    <input type="radio" id="type1" name="typeGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                    <label for="type1" class="ml-2 text-gray-700">All Tuition</label>
                </div>
                <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M464 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zM128 120c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm0 96c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm0 96c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm288-136v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12zm0 96v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12zm0 96v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12z"></path></svg>
            </div>
            <div class="flex justify-between items-center my-2">
                <div class="flex items-center">
                    <input type="radio" id="type2" name="typeGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                    <label for="type2" class="ml-2 text-gray-700">Home Tuition</label>
                </div>
                <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
            </div>
            <div class="flex justify-between items-center my-2">
                <div class="flex items-center">
                    <input type="radio" id="type3" name="typeGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                    <label for="type3" class="ml-2 text-gray-700">Online Tuition</label>
                </div>
                <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z"></path></svg>
            </div>
        </div>
        <div class="my-5">
            <h1 class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tutor Preferance</h1>
        </div>
        <div>
            <div class="flex justify-between items-center my-2">
                <div class="flex items-center">
                    <input type="radio" id="gender1" name="genderGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                    <label for="gender1" class="ml-2 text-gray-700">All</label>
                </div>
                <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M564 0h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-48.7 48.7C422.5 72.1 396.2 64 368 64c-33.7 0-64.6 11.6-89.2 30.9 14 16.7 25 36 32.1 57.1 14.5-14.8 34.7-24 57.1-24 44.1 0 80 35.9 80 80s-35.9 80-80 80c-22.3 0-42.6-9.2-57.1-24-7.1 21.1-18 40.4-32.1 57.1 24.5 19.4 55.5 30.9 89.2 30.9 79.5 0 144-64.5 144-144 0-28.2-8.1-54.5-22.1-76.7l48.7-48.7 16.9 16.9c2.4 2.4 5.4 3.5 8.4 3.5 6.2 0 12.1-4.8 12.1-12V12c0-6.6-5.4-12-12-12zM144 64C64.5 64 0 128.5 0 208c0 68.5 47.9 125.9 112 140.4V400H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v36c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-36h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-51.6c64.1-14.6 112-71.9 112-140.4 0-79.5-64.5-144-144-144zm0 224c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
            </div>
            <div class="flex justify-between items-center my-2">
                <div class="flex items-center">
                    <input type="radio" id="gender2" name="genderGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                    <label for="gender2" class="ml-2 text-gray-700">Male</label>
                </div>
                <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M372 64h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-80.7 80.7c-22.2-14-48.5-22.1-76.7-22.1C64.5 160 0 224.5 0 304s64.5 144 144 144 144-64.5 144-144c0-28.2-8.1-54.5-22.1-76.7l80.7-80.7 16.9 16.9c7.6 7.6 20.5 2.2 20.5-8.5V76c0-6.6-5.4-12-12-12zM144 384c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
            </div>
            <div class="flex justify-between items-center my-2">
                <div class="flex items-center">
                    <input type="radio" id="gender3" name="genderGroup" class="form-radio text-red-500 focus:ring-red-500 h-4 w-4">
                    <label for="gender3" class="ml-2 text-gray-700">Female</label>
                </div>
                <svg class="text-[#92096d]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 288 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 176c0-79.5-64.5-144-144-144S0 96.5 0 176c0 68.5 47.9 125.9 112 140.4V368H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v36c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-36h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-51.6c64.1-14.5 112-71.9 112-140.4zm-224 0c0-44.1 35.9-80 80-80s80 35.9 80 80-35.9 80-80 80-80-35.9-80-80z"></path></svg>
            </div>
        </div>
        <div class="mt-5">
            <div class="py-2">
                <label for="Tuition_District"
                    class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Tuition
                    District </label>
                <select name="Tuition_District" id="Tuition_District2" onclick="upazilaList2()"
                    class="Tuition_District text-black border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">

                </select>
                @error('Tuition_District')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
            </div>
            <div class="py-2">
                <label for="Tutor_Location"
                    class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Select Area</label>
                <select name="Tutor_Location" id="Tutor_Location2"
                    class="Tutor_Location text-black border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">
                    <option selected value="all">All</option>
                </select>
                @error('Tutor_Location')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="mb-5">
            <div class="py-2">
                <label for="medium"
                    class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Select Medium</label>
                <select name="medium" id="medium2" onclick="classlist2()"
                    class="medium text-black border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">
                    <option selected value="all">All</option>
                    <option value="1">Bangla Medium</option>
                    <option value="2">English Version</option>
                    <option value="3">English Medium</option>
                    <option value="4">Religious Studies</option>
                    <option value="5">Admission Test</option>
                    <option value="6">Professional skill Development</option>
                    <option value="7">Arts</option>
                    <option value="8">Special Skill Development</option>
                    <option value="9">Uni Help</option>
                    <option value="10">Language Learning</option>
                    <option value="11">Test Preparation</option>
                    <option value="12">Madrasa Medium</option>
                    <option value="13">Special Child Education</option>
                </select>
                @error('medium')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
            </div>
            <div class="py-2">
                <label for="class"
                    class="text-[#a80b76] lg:text-[20px] text-[16px] leading-[26px] font-semibold font-['Nunito,sans-serif']">Select Class</label>
                <select name="class" id="class2"
                    class="class text-black border-[1px] mt-4 border-solid border-[#b4c0e0]  h-[36px] px-[10px] w-[100%]">
                    <option selected value="all">All</option>
                </select>
                @error('class')
                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu_toggle");
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

