<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Notification</title>
</head>
<body>
    <header>
        @include('teacher/index_nav_bar')
    </header>
    @include('partial/error_success')
    @include('teacher/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5">
        <span class="mb-3 text-[#05264e] lg:text-[28px] text-[24px] leading-[28px] font-semibold font-['Nunito,sans-serif'] border-b-[2px] border-[#05264e]">Message From Student</span>
        <div class="overflow-x-auto mt-5">
            <table class="table-auto w-full border-collapse">
              <thead>
                <tr class="bg-yellow-100 lg:text-[24px] text-[16px]">
                  <th class="px-4 py-2 text-left">Id</th>
                  <th class="px-4 py-2 text-left">Name</th>
                  <th class="px-4 py-2 text-left">Phone Number</th>
                  <th class="px-4 py-2 text-left">Message</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($messages as $message)
                    <tr class="bg-green-100">
                        <td class="border px-4 py-2">#{{$message->id}}</td>
                        <td class="border px-4 py-2">
                            <p class="text-[#05264e] lg:text-[20px] text-[16px]  font-semibold">{{$message->name}}</p>
                        </td>
                        <td class="border px-4 py-2">
                            <p class="text-[#05264e] lg:text-[20px] text-[16px]  font-semibold">{{$message->phone}}</p>
                        </td>
                        <td class="border px-4 py-2">
                            <p class="text-[#05264e] lg:text-[16px] text-[12px]">{{$message->message}}</p>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div> 
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>
