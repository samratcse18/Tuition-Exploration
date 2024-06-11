<div id="Tuition-info">
    <span class="text-[36px] font-semibold text-[#05264e] border-b-[2px] border-solid border-[#9e0a72]">Tuition info</span>
    <h1 class="text-[20px] py-2 text-[#66789c]">Update your profile</h1>
</div>
<div class="shadow-xl border border-solid border-gray-300 py-4">
    <div class="lg:px-[100px] px-[20px]">
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="Tuition_District" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Select provide tuition districts:</label>
            <select name="Tuition_District" id="Tuition_District" onclick="upazilaList()" 
                    class="Tuition_District form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">

            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="Tutor_Location" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Preferred Area for tuition:</label>
            <select name="Tutor_Location[]" id="Tutor_Location" multiple
                    class="Tutor_Location form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">

            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="medium" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Preferred Medium:</label>
            <select name="medium[]" id="medium" onclick="classlist()" multiple
                    class="medium form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
                    <option selected value="all">All</option>
                    <option value="Bangla Medium" @if($data && $data->medium == 'Bangla Medium') selected @endif>Bangla Medium</option>
                    <option value="English Version" @if($data && $data->medium == 'English Version') selected @endif>English Version</option>
                    <option value="English Medium" @if($data && $data->medium == 'English Medium') selected @endif>English Medium</option>
                    <option value="Religious Studies" @if($data && $data->medium == 'Religious Studies') selected @endif>Religious Studies</option>
                    <option value="Admission Test" @if($data && $data->medium == 'Admission Test') selected @endif>Admission Test</option>
                    <option value="Professional skill Development" @if($data && $data->medium == 'Professional skill Development') selected @endif>Professional skill Development</option>
                    <option value="Arts" @if($data && $data->medium == 'Arts') selected @endif>Arts</option>
                    <option value="Special Skill Development" @if($data && $data->medium == 'Special Skill Development') selected @endif>Special Skill Development</option>
                    <option value="Uni Help" @if($data && $data->medium == 'Uni Help') selected @endif>Uni Help</option>
                    <option value="Language Learning" @if($data && $data->medium == 'Language Learning') selected @endif>Language Learning</option>
                    <option value="Test Preparation" @if($data && $data->medium == 'Test Preparation') selected @endif>Test Preparation</option>
                    <option value="Madrasa Medium" @if($data && $data->medium == 'Madrasa Medium') selected @endif>Madrasa Medium</option>
                    <option value="Special Child Education" @if($data && $data->medium == 'Special Child Education') selected @endif>Special Child Education</option>                    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="class" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Preferred Classes:</label>
            <select name="class[]" id="class" multiple
                    class="class form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">

            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="subject" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Preferred Subjects (1st one will be Major Sub):</label>
            <input type="text" name="subject" id="subject" placeholder="ex: bangla, english" value="@if($data) {{$data->subject}} @endif"
                class="subject form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="day" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Days Per Week:</label>
            <select name="day[]" id="day" multiple
                    class="day form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
                    <option value="1 Day/Week" @if($data && $data->day == '1 Day/Week') selected @endif>1 Day/Week</option>
                    <option value="2 Day/Week" @if($data && $data->day == '2 Day/Week') selected @endif>2 Day/Week</option>
                    <option value="3 Day/Week" @if($data && $data->day == '3 Day/Week') selected @endif>3 Day/Week</option>
                    <option value="4 Day/Week" @if($data && $data->day == '4 Day/Week') selected @endif>4 Day/Week</option>
                    <option value="5 Day/Week" @if($data && $data->day == '5 Day/Week') selected @endif>5 Day/Week</option>
                    <option value="6 Day/Week" @if($data && $data->day == '6 Day/Week') selected @endif>6 Day/Week</option>
                    <option value="7 Day/Week" @if($data && $data->day == '7 Day/Week') selected @endif>7 Day/Week</option>                    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="shift" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Timing Shift:</label>
            <select name="shift[]" id="shift" multiple
                    class="shift form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
                    <option value="Morning" @if($data && $data->shift == 'Morning') selected @endif>Morning</option>
                    <option value="Afternoon" @if($data && $data->shift == 'Afternoon') selected @endif>Afternoon</option>
                    <option value="Evening" @if($data && $data->shift == 'Evening') selected @endif>Evening</option>
                    <option value="After Magrib" @if($data && $data->shift == 'After Magrib') selected @endif>After Magrib</option>
                    <option value="Night" @if($data && $data->shift == 'Night') selected @endif>Night</option>                    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="salary" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Expected Salary:</label>
            <select name="salary" id="salary" 
                    class="salary form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
                    <option selected disabled>Select One</option>
                    <option value="2000 Tk/Month" @if($data && $data->salary == '2000 Tk/Month') selected @endif>2000 Tk/Month</option>
                    <option value="2500 Tk/Month" @if($data && $data->salary == '2500 Tk/Month') selected @endif>2500 Tk/Month</option>
                    <option value="3000 Tk/Month" @if($data && $data->salary == '3000 Tk/Month') selected @endif>3000 Tk/Month</option>
                    <option value="3500 Tk/Month" @if($data && $data->salary == '3500 Tk/Month') selected @endif>3500 Tk/Month</option>
                    <option value="4000 Tk/Month" @if($data && $data->salary == '4000 Tk/Month') selected @endif>4000 Tk/Month</option>
                    <option value="4500 Tk/Month" @if($data && $data->salary == '4500 Tk/Month') selected @endif>4500 Tk/Month</option>
                    <option value="5000 Tk/Month" @if($data && $data->salary == '5000 Tk/Month') selected @endif>5000 Tk/Month</option>                    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="tutoring_style" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Preffered Tutoring Style:</label>
            <select name="tutoring_style[]" id="tutoring_style" multiple
                    class="tutoring_style form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
                    <option selected disabled>Select One</option>
                    <option value="Private Tuition" @if($data && $data->tutoring_style == 'Private Tuition') selected @endif>Private Tuition</option>
                    <option value="Group Tuition" @if($data && $data->tutoring_style == 'Group Tuition') selected @endif>Group Tuition</option>
                    <option value="Online Tuition" @if($data && $data->tutoring_style == 'Online Tuition') selected @endif>Online Tuition</option>                    
            </select>
        </div>
        <div class="flex lg:flex-row flex-col lg:justify-between lg:items-center py-2">
            <label for="experience" class="text-[#05264e] text-[18px] font-semibold font-['adobe-garamond-pro'] lg:w-[30%] w-[100%]">Tuition experience (In Year):</label>
            <select name="experience" id="experience" 
                    class="experience form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] lg:w-[70%] w-[100%]">
                    <option selected disabled>Select One</option>
                    @for ($i = 0; $i <= 10; $i++)
                        <option value="{{ $i }} Year" @if($data && $data->experience == $i . ' Year') selected @endif>{{ $i }} Year</option>
                    @endfor
            </select>
        </div>
    </div>
</div>
<script src="{{ asset('js/location.js') }}"></script>
