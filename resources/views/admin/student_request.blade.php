<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Request Lists</title>
</head>
<body>
    <header>
        @include('admin/navbar')
    </header>
    @include('partial/error_success')
    @include('admin/sidebar')
    <main class="lg:ml-[280px] ml-0 mb-[100px] lg:mb-0 p-5">
        <div class="relative overflow-x-auto shadow-md">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-600 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Serial
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Student Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Medium
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Class
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tuition District
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tuition Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $serial=1;
                    @endphp
                    @foreach ($s_requests as $s_request)
                    <tr class="bg-green-600 text-white border-b ">
                        <th scope="row" class="px-6 py-4">
                        {{ $serial }}
                        </th>
                        <td class="px-6 py-4">
                        {{ $s_request->student_name }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $s_request->phone }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $s_request->medium }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $s_request->class }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $s_request->Tuition_District }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $s_request->Tutor_Location }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $s_request->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="student-request/delete_student_request/{{$s_request->id}}" class="font-medium text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                        @php
                            $serial = $serial+1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
