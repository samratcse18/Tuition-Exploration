<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tutor Request</title>
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
    @include('partial/error_success')
    <main>
        <div>
            <div class="lg:mx-[200px] mx-[17px] lg:py-[50px]">
                <div>
                    <h1 class="lg:text-[35px] text-[25px] text-[#05264e] font-['Nunito','sans-serif'] py-[10px] font-semibold">আপনি কি টিউটর খুঁজছেন?</h1>
                    <p class="lg:text-[20px] text-[16px] text-[#66789c] font-['Nunito','sans-serif']">তাহলে ফর্মটি পূরণ করে জানান আপনি কোন ক্লাস/এরিয়ার জন্য টিউটর খুঁজছেন। ফর্ম পূরণ করে সাবমিট করার পরবর্তী ২৪ ঘন্টার মধ্যে আমাদের একজন প্রতিনিধি আপনার দেওয়া মোবাইল নাম্বারে যোগাযোগ করবেন।</p>
                </div>
                <form action="{{ route('tutor.request') }}" method="post">
                    @csrf
                    <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                        <div class="py-2">
                            <label for="student_name"
                                class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Student Name
                                <span class="text-[12px]">(required)</span></label>
                            <input type="student_name" name="student_name"
                                class="student_name border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]"
                                id="student_name" placeholder="Enter your name">
                            @error('student_name')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="phone"
                                class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Phone
                                <span class="text-[12px]">(required)</span></label>
                            <input type="number" name="phone"
                                class="phone border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]"
                                id="phone" placeholder="Phone number">
                            @error('phone')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                        <div class="py-2">
                            <label for="medium"
                                class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Select Medium <span class="text-[12px]">(required)</span></label>
                            <select name="medium" id="medium" onclick="classlist()"
                                class="medium border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]">
                                <option selected disabled>Select medium</option>
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
                                class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Select Class <span class="text-[12px]">(required)</span></label>
                            <select name="class" id="class"
                                class="class border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]">

                            </select>
                            @error('class')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                        <div class="py-2">
                            <label for="Tuition_District"
                                class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Tuition
                                District <span class="text-[12px]">(required)</span></label>
                            <select name="Tuition_District" id="Tuition_District" onclick="upazilaList()"
                                class="Tuition_District border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]">

                            </select>
                            @error('Tuition_District')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="Tutor_Location"
                                class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Your
                                Location <span class="text-[12px]">(required)</span></label>
                            <select name="Tutor_Location" id="Tutor_Location" onclick="thanaList()"
                                class="Tutor_Location border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]">

                            </select>
                            @error('Tutor_Location')
                                <small class="text-danger text-yellow-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4 flex justify-center items-center">
                        <button type="submit"
                            class="text-[#000] uppercase bg-[#FFCB05] rounded-md py-[10px] px-6 hover:bg-[#000] hover:text-[#FFCB05] font-semibold">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        @include('index_footer')
    </footer>
</body>
<script src="{{ asset('js/location.js') }}"></script>
<script src="{{ asset('js/education.js') }}"></script>

</html>
