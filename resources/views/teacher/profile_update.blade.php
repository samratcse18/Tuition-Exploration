<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Teacher Profile Update</title>
</head>
<body>
    <header>
        @include('teacher/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('teacher/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[10px] lg:mb-0">
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-2 m-4 pt-4">
            <a href="#Educational-info"><div class="flex flex-col items-center lg:px-[50px] px-[20px] py-[10px] border-[1px]">
                <img class="lg:w-[80px] w-[60px]" alt="image" src="https://tutorsheba.com/_next/static/media/education.34baf163.svg">
                <h1 class="lg:text-[20px] font-semibold">Educational-info</h1>
            </div></a>
            <a href="#Tuition-info"><div class="flex flex-col items-center lg:px-[50px] px-[20px] py-[10px] border-[1px]">
                <img class="lg:w-[80px] w-[60px]" alt="image" src="https://tutorsheba.com/_next/static/media/teacher.c2611941.svg">
                <h1 class="lg:text-[20px] font-semibold">Tuition-info</h1>
            </div></a>
            <a href="#Personal-info"><div class="flex flex-col items-center lg:px-[50px] px-[20px] py-[10px] border-[1px]">
                <img class="lg:w-[80px] w-[60px]" alt="image" src="https://tutorsheba.com/_next/static/media/user.53603a0a.svg">
                <h1 class="lg:text-[20px] font-semibold">Personal-info</h1>
            </div></a>
            <a href="#Documents-info"><div class="flex flex-col items-center lg:px-[50px] px-[20px] py-[10px] border-[1px]">
                <img class="lg:w-[80px] w-[60px]" alt="image" src="https://tutorsheba.com/_next/static/media/documents.edd73d3c.svg">
                <h1 class="lg:text-[20px] font-semibold">Documents-info</h1>
            </div></a>
        </div>
    </main>
    <section class="lg:ml-[280px] ml-0 mb-[20px] px-4">
        <form action="{{ route('teacher.update_profile', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('teacher.update_profile_component.Educational-info')
            @include('teacher.update_profile_component.Tuition-info')
            @include('teacher.update_profile_component.Personal-info')
            @include('teacher.update_profile_component.Documents-info')
            <div class="flex justify-center my-5">
                <button id="next" class="bg-[#2098ce] hover:bg-[#2097cee8] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px] ">Update Profile</button>
            </div>
        </form>
    </section>
</body>
</html>
<script src="{{ asset('js/common_location.js') }}"></script>