<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registation</title>
    <style>
        @keyframes hero-thumb-animation {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .shape-1 {
            animation: hero-thumb-animation 3s linear infinite alternate;
        }

        .animation {
            animation-name: fadeIn;
        }
    </style>
</head>

<body>
    <header>
        @include('index_nav_bar')
    </header>
    <main>
        <div class="lg:mx-[45px] px-[12px] flex lg:flex-row flex-col-reverse">
            <div class="lg:w-[50%] w-[100%] h-[832px] px-[12px]">
                <div class="h-[832px] flex items-center">
                    <div class="shape-1 mt-[-100px]">
                        <span
                            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                    alt="" aria-hidden="true"
                                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27500%27%20height=%27500%27/%3e"
                                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                                alt="svg"
                                src="https://tutorsheba.com/_next/static/media/Mobile login-bro.f79ed0f8.svg"
                                decoding="async" data-nimg="intrinsic"
                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                srcset="https://tutorsheba.com/_next/static/media/Mobile login-bro.f79ed0f8.svg 1x, https://tutorsheba.com/_next/static/media/Mobile login-bro.f79ed0f8.svg 2x"></span>
                    </div>
                </div>
            </div>
            <div class="lg:w-[50%] w-[100%] px-[12px] mt-[10px] mb-[16px]">
                <div class="animation py-[16px] lg:px-[48px] border-[.8px] border-solid border-[rgba(0,0,0,.125)]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                    <h1 class="text-center border-b border-solid border-[#ae0b79] font-semibold text-[32px]">Register
                    </h1>
                    <div class="flex justify-evenly rounded-2xl mt-4 bg-gray-400 py-4 text-white">
                        <div id="tutorButton" class="flex items-center rounded-2xl space-x-2 bg-[#ff4742] p-3 cursor-pointer">
                            <img src="{{ asset('image/teacher.webp') }}" alt="">
                            <h1 class="text-[20px]">Tutor</h1>
                        </div>
                        <div id="studentButton"
                            class="flex items-center rounded-2xl space-x-2 bg-[#2a2a2a] hover:bg-[#ff4742] p-3 cursor-pointer">
                            <img src="{{ asset('image/student.webp') }}" alt="">
                            <h1 class="text-[20px]">Student</h1>
                        </div>
                    </div>
                    <div id="tutor" class="mt-[10px]">
                        <h1 class="text-center text-[24px] font-semibold">Tutor Registation</h1>
                        <form action="{{ route('teacher.create') }}" method="post">
                            @csrf
                            <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                                <div class="py-2">
                                    <label for="name"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Name
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="text" name="name"
                                        class="name border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="name">
                                    @error('name')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <label for="gender"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Gender
                                        <span class="text-[12px]">(required)</span></label>
                                    <select name="gender" id="gender"
                                        class="gender border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]">
                                        <option selected disabled>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                                <div class="py-2">
                                    <label for="email"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Email
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="email" name="email"
                                        class="email border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="email">
                                    @error('email')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <label for="phone"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Phone
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="number" name="phone"
                                        class="phone border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="phone">
                                    @error('phone')
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
                                        class="Tuition_District border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]">

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
                                        class="Tutor_Location border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]">

                                    </select>
                                    @error('Tutor_Location')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="py-2">
                                <label for="Preferred_Tuition_Area"
                                    class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Preferred
                                    Tuition Area <span class="text-[12px]">(required)</span></label>
                                <select name="Preferred_Tuition_Area" id="Preferred_Tuition_Area"
                                    class="Preferred_Tuition_Area border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]">

                                </select>
                                @error('Preferred_Tuition_Area')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                                <div class="py-2">
                                    <label for="password"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Password
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="password" name="password"
                                        class="password border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="password">
                                    @error('password')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <label for="cpassword"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Re-Password
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="password" name="cpassword"
                                        class="cpassword border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="cpassword">
                                        @error('cpassword')
                                            <small class="text-danger text-yellow-400">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="py-4 flex justify-center items-center">
                                <button type="submit"
                                    class="bg-[#2098ce] hover:bg-[#2097cee0] rounded-lg text-white font-semibold text-[18px] px-4 py-2 uppercase">submit</button>
                            </div>
                            <div class="py-4 flex justify-center items-center">
                                <h1>Already have an account? <a href="{{ route('login') }}"
                                        class="text-blue-600">Sign
                                        in</a></h1>
                            </div>
                        </form>
                    </div>
                    <div id="student" class="hidden mt-[10px]">
                        <h1 class="text-center text-[24px] font-semibold">Student Registation</h1>
                        <form action="{{ route('student.create') }}" method="post">
                            @csrf
                            <div class="py-2">
                                <div class="py-2">
                                    <label for="name"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Name
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="text" name="name"
                                        class="name border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="name">
                                        @error('name')
                                            <small class="text-danger text-yellow-400">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="py-2">
                                    <label for="email"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Email
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="email" name="email"
                                        class="email border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="email">
                                        @error('email')
                                            <small class="text-danger text-yellow-400">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="py-2">
                                    <label for="phone"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Phone
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="number" name="phone"
                                        class="phone border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="phone">
                                        @error('phone')
                                            <small class="text-danger text-yellow-400">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-1">
                                <div class="py-2">
                                    <label for="password"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Password
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="password" name="password"
                                        class="password border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="password">
                                        @error('password')
                                            <small class="text-danger text-yellow-400">{{ $message }}</small>
                                        @enderror
                                </div>
                                <div class="py-2">
                                    <label for="cpassword"
                                        class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Re-Password
                                        <span class="text-[12px]">(required)</span></label>
                                    <input type="password" name="cpassword"
                                        class="cpassword border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px] w-[100%]"
                                        id="cpassword">
                                        @error('cpassword')
                                            <small class="text-danger text-yellow-400">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            <div class="py-4 flex justify-center items-center">
                                <button type="submit"
                                    class="bg-[#2098ce] hover:bg-[#2097cee0] rounded-lg text-white font-semibold text-[18px] px-4 py-2 uppercase">submit</button>
                            </div>
                            <div class="py-4 flex justify-center items-center">
                                <h1>Already have an account? <a href="{{ route('login') }}"
                                        class="text-blue-600">Sign
                                        in</a></h1>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('index_footer')
    </footer>
</body>
<script>
    document.getElementById("tutorButton").addEventListener("click", function() {
        document.getElementById("student").classList.add("hidden");
        document.getElementById("studentButton").classList.remove("bg-[#ff4742]");
        document.getElementById("tutor").classList.remove("hidden");
        document.getElementById("tutorButton").classList.add("bg-[#ff4742]");
    });
    document.getElementById("studentButton").addEventListener("click", function() {
        document.getElementById("student").classList.remove("hidden");
        document.getElementById("studentButton").classList.add("bg-[#ff4742]");
        document.getElementById("tutor").classList.add("hidden");
        document.getElementById("tutorButton").classList.remove("bg-[#ff4742]");
        document.getElementById("tutorButton").classList.add("hover:bg-[#ff4742]");
        document.getElementById("tutorButton").classList.add("bg-[#2a2a2a]");
    });
</script>
<script src="{{ asset('js/location.js') }}"></script>

</html>
