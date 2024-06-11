<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Application</title>
</head>
<body>
    <header>
        @include('admin/navbar')
    </header>
    @include('partial/error_success')
    @include('admin/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse">
              <thead>
                <tr class="bg-yellow-100">
                  <th class="px-4 py-2 text-left">Id</th>
                  <th class="px-4 py-2">Job Details</th>
                  <th class="px-4 py-2">Job Creator Details</th>
                  <th class="px-4 py-2">Applicant Details</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datas as $data)
                    <tr class="bg-green-100">
                        <td class="border px-4 py-2">#{{$data->id}}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href='/tuition-job/job-details/{{$data->job_id}}'>
                                <p class="text-[#05264e] lg:text-[24px] text-[20px]  font-bold">
                                    <button type="submit" class="bg-[#6c2a8c] hover:bg-[#530b76] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px]">View</button>
                                </p>
                            </a>
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <a href='/student-job-request/job-request-details/{{$data->job_id}}'>
                                <p class="text-[#05264e] lg:text-[24px] text-[20px]  font-bold">
                                    <button type="submit" class="bg-[#6c2a8c] hover:bg-[#530b76] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px]">View</button>
                                </p>
                            </a>
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <a href='/tutor-details/{{$data->applicant_id}}'>
                                <p class="text-[#05264e] lg:text-[24px] text-[20px]  font-bold">
                                    <button type="submit" class="bg-[#6c2a8c] hover:bg-[#530b76] rounded-lg text-white font-semibold text-[18px] px-4 py-[6px]">View</button>
                                </p>
                            </a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>  
    </main>
</body>
</html>
