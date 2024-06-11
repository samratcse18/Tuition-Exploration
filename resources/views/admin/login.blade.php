<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin::Login</title>
</head>

<body style="background:url({{ asset('image/footer.png') }})">
    @include('partial/error_success')
    <main>
        <div class="lg:mx-[45px] px-[12px]">
            <div class="w-[100%] h-screen px-[12px] flex justify-center items-center">
                <div class="py-[16px] lg:px-[48px] border-[.8px] border-solid border-[rgba(0,0,0,.125)] bg-white">
                    <div class="">
                        <h1 class="text-center text-[24px] font-semibold">Admin Login</h1>
                        <form action="{{ route('admin.doLogin') }}" method="post">
                            @csrf
                            <div class="py-2">
                                <label for="email"
                                    class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Email
                                    <span class="text-[12px]">(required)</span></label>
                                <input type="text" name="email"
                                    class="email border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]"
                                    id="email">
                                @error('email')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="py-2">
                                <label for="password"
                                    class="text-[rgba(26,26,26,.7)] text-[18px] font-['adobe-garamond-pro']">Password
                                    <span class="text-[12px]">(required)</span></label>
                                <input type="password" name="password"
                                    class="password border-2 border-solid border-[#a9a9a9] bg-[#fafafa] text-[#000] h-[46px] p-[10px] w-[100%]"
                                    id="password">
                                @error('password')
                                    <small class="text-danger text-yellow-400">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="py-4 flex justify-center items-center">
                                <button type="submit"
                                    class="text-[#000] uppercase bg-[#FFCB05] py-[10px] px-6 hover:bg-[#000] hover:text-[#FFCB05] font-semibold">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
