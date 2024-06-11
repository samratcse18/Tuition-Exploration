<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Upload Video</title>
</head>
<body>
    <header>
        @include('teacher/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('teacher/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5">
        <span class="mb-3 text-[#05264e] lg:text-[28px] text-[24px] leading-[28px] font-semibold font-['Nunito,sans-serif'] border-b-[2px] border-[#05264e]">Upload Video</span>
        <div>
            <form action="{{ route('teacher.video_post', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="my-5">
                    <div class="p-[15px]" style="box-shadow: 0 0 15px 1px rgba(0,0,0,.4);">
                        <div class="flex lg:flex-row flex-col justify-between lg:space-x-2 space-x-0">
                            <div class="flex flex-col w-[100%] py-2">
                                <label for="title" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Video Title</label>
                                <input type="text" name="title" id="title" required
                                    class="title form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('title')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col justify-between lg:space-x-2 space-x-0">
                            <div class="flex flex-col w-[100%] py-2">
                                <label for="description" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Video Description</label>
                                <textarea type="text" name="description" id="description" rows="3"class="description form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]" required></textarea>
                                    @error('description')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col justify-between lg:space-x-2 space-x-0">
                            <div class="flex flex-col w-[100%] py-2">
                                <label for="video_file" class="text-[#05264e] text-[17px] font-semibold font-['adobe-garamond-pro']">Choice File</label>
                                <input type="file" name="video_file" id="video_file" placeholder="Ex: ********" required
                                    class="video_file form-control border-[1px] border-solid border-[#ced4da] bg-[#fff] text-[#000] px-[10px] py-[6px]">
                                    @error('video_file')
                                        <small class="text-danger text-yellow-400">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="bg-[#6c2a8c] hover:bg-[#530b76] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px]">Upload</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-2">
                @foreach ($videos as $video)
                    <iframe class="lg:w-[560px] w-[100%] lg:h-[315px]" src="{{ asset('video/' . $video->video_file) }}" sandbox frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @endforeach
            </div>
        </div>
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>
