<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <title>Tutor Request</title>
</head>
<body>
    <header>
        @include('student/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('student/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5 my-5">
        <form action="{{ route('job.create') }}" method="post">
            @csrf
            <div class="space-y-5">
                <div class="p-[15px]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="mb-[10px] text-[18px] text-[#2c3e50] font-bold tracking-[2px]">STUDENT DETAILS</h1>
                        <small class="mb-[20px] text-[#666] text-[13px] font-[400px]">Tell about student and location</small>
                    </div>
                    <div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="student_name" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Student Name</label>
                                <input type="text" name="student_name" id="student_name" placeholder="Ex: Setu Kanti Dey" required
                                    class="student_name form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('student_name')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="hidden">
                                <input type="text" name="creatorid" id="creatorid" value="{{Auth::user()->id}}">
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="number_of_student" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Number of Student</label>
                                <input type="text" name="number_of_student" id="number_of_student" placeholder="Ex: 1" required
                                    class="number_of_student form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('number_of_student')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="gender" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select Student Gender</label>
                                <select name="gender" id="gender" required
                                        class="gender form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="institute" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Institute</label>
                                <input type="text" name="institute" id="institute" placeholder="Ex: Viqarunnisa Noon School & College" required
                                    class="institute form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('institute')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="district" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select District</label>
                                <select name="district" id="Tuition_District" required onclick="upazilaList()"
                                        class="district form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        
                                </select>
                                @error('district')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="area" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select Area</label>
                                <select name="area" id="Tutor_Location" required
                                        class="area form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        
                                </select>
                                @error('area')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col w-[100%] py-2">
                            <label for="location" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Location Details</label>
                            <textarea name="location" id="location" rows="2" class="location form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]" placeholder="Ex: Road-08, House-07, Block-D, Mirpur-06" required></textarea>
                            @error('location')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="p-[15px]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="mb-[10px] text-[18px] text-[#2c3e50] font-bold tracking-[2px]">TUITION INFO</h1>
                        <small class="mb-[20px] text-[#666] text-[13px] font-[400px]">Your preferred tuition related info</small>
                    </div>
                    <div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="medium" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select Your Medium</label>
                                <select name="medium" id="medium" onclick="classlist()" required
                                        class="medium form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Medium</option>
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
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="class" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select Student Class</label>
                                <select name="class" id="class" onclick="subjectlist()" required
                                        class="class form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Class</option>
                                </select>
                                @error('class')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="subject" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select Subject</label>
                                <select name="subject[]" id="subject" multiple required
                                        class="subject form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        
                                </select>
                                @error('subject')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="type" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Select Tutoring Type</label>
                                <select name="type" id="type" required
                                        class="type form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Type</option>
                                        <option value="Home">Home</option>
                                        <option value="Online">Online</option>
                                </select>
                                @error('type')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-[15px]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="mb-[10px] text-[18px] text-[#2c3e50] font-bold tracking-[2px]">TUTOR DETAILS</h1>
                        <small class="mb-[20px] text-[#666] text-[13px] font-[400px]">Preferred Tutors Type and Time</small>
                    </div>
                    <div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="teacher_gender" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Preferred Teacher Gender</label>
                                <select name="teacher_gender" id="teacher_gender" required
                                        class="teacher_gender form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Gender</option>
                                        <option value="Any Gender">Any Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                </select>
                                @error('teacher_gender')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="day" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Days Per Week</label>
                                <select name="day" id="day" required
                                        class="day form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Your Day</option>
                                        <option value="1 Day/Week">1 Day/Week</option>
                                        <option value="2 Day/Week">2 Day/Week</option>
                                        <option value="3 Day/Week">3 Day/Week</option>
                                        <option value="4 Day/Week">4 Day/Week</option>
                                        <option value="5 Day/Week">5 Day/Week</option>
                                        <option value="6 Day/Week">6 Day/Week</option>
                                        <option value="7 Day/Week">7 Day/Week</option>
                                </select>
                                @error('day')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="time" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Tutoring Time</label>
                                <select name="time" id="time" required
                                        class="time form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Tutoring Time</option>
                                        <option value="06:00 am">06:00 am</option>
                                        <option value="07:00 am">07:00 am</option>
                                        <option value="08:00 am">08:00 am</option>
                                        <option value="09:00 am">09:00 am</option>
                                        <option value="04:00 pm">04:00 pm</option>
                                        <option value="05:00 pm">05:00 pm</option>
                                        <option value="06:00 pm">06:00 pm</option>
                                        <option value="07:00 pm">07:00 pm</option>
                                        <option value="08:00 pm">08:00 pm</option>
                                </select>
                                @error('time')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="salary" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Salary Range</label>
                                <select name="salary" id="salary" required
                                        class="salary form-select border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                        <option selected disabled>Select Salary Range</option>
                                        <option value="2000 Tk/Month">2000 Tk/Month</option>
                                        <option value="2500 Tk/Month">2500 Tk/Month</option>
                                        <option value="3000 Tk/Month">3000 Tk/Month</option>
                                        <option value="3500 Tk/Month">3500 Tk/Month</option>
                                        <option value="4000 Tk/Month">4000 Tk/Month</option>
                                        <option value="4500 Tk/Month">4500 Tk/Month</option>
                                        <option value="5000 Tk/Month">5000 Tk/Month</option>
                                        <option value="6000 Tk/Month">6000 Tk/Month</option>
                                        <option value="7000 Tk/Month">7000 Tk/Month</option>
                                        <option value="8000 Tk/Month">8000 Tk/Month</option>
                                        <option value="9000 Tk/Month">9000 Tk/Month</option>
                                        <option value="10000 Tk/Month">10000 Tk/Month</option>
                                </select>
                                @error('salary')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col w-[100%] py-2">
                            <label for="extra_information" class="text-[#05264e] text-[17px] text-center font-semibold font-['adobe-garamond-pro']">Extra Information</label>
                            <textarea name="extra_information" id="extra_information" rows="3" class="extra_information form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]"></textarea>
                            @error('extra_information')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-[#2098ce] rounded-lg text-white font-semibold text-[18px] px-4 py-2">Submit</button>
                </div>
            </div>
        </form>
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script src="{{ asset('js/location.js') }}"></script>
<script src="{{ asset('js/education.js') }}"></script>
<script>
    // new MultiSelectTag('subject')
</script>