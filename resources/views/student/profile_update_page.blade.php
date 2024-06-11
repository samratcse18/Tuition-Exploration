<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <title>Profile Update</title>
</head>
<body>
    <header>
        @include('student/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('student/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5 my-5">
        <span class="mb-3 text-[#05264e] lg:text-[28px] text-[24px] leading-[28px] font-semibold font-['Nunito,sans-serif'] border-b-[2px] border-[#05264e]">Update Profile</span>
        <div>
            <form action="{{ route('student.info_update', ['id' => Auth::user()->id]) }}" method="post">
                @csrf
                <div class="my-5">
                    <div class="my-2">
                        <h1 class="text-[#66789c] text-[18px] font-[400px]">Provide student information</h1>
                    </div>
                    <div class="p-[15px]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                        <div class="flex lg:flex-row flex-col justify-between">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="name" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Student Name</label>
                                <input type="text" name="name" id="name" placeholder="Ex: Setu kanti dey" value="{{Auth::user()->name}}" required
                                    class="name form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('name')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="phone" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="Ex: 0175510111111" value="{{Auth::user()->phone}}" required
                                    class="phone form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('phone')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="bg-[#6c2a8c] hover:bg-[#530b76] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px]">Update</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{ route('student.password_update', ['id' => Auth::user()->id]) }}" method="post">
                @csrf
                <div class="my-5">
                    <div class="my-2">
                        <h1 class="text-[#66789c] text-[18px] font-[400px]">Update Password</h1>
                    </div>
                    <div class="p-[15px]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                        <div class="flex lg:flex-row flex-col justify-between lg:space-x-2 space-x-0">
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="old_password" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Old Password</label>
                                <input type="password" name="old_password" id="old_password" placeholder="Ex: ********" required
                                    class="old_password form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('old_password')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="new_password" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">New Password</label>
                                <input type="password" name="new_password" id="new_password" placeholder="Ex: ********" required
                                    class="new_password form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('new_password')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="flex flex-col lg:w-[49%] w-[100%] py-2">
                                <label for="confirm_password" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Ex: ********" required
                                    class="confirm_password form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('confirm_password')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="bg-[#6c2a8c] hover:bg-[#530b76] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px]">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script>
    new MultiSelectTag('subject')
</script>
<script src="{{ asset('js/location.js') }}"></script>
<script src="{{ asset('js/education.js') }}"></script>