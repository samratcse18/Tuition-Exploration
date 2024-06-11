<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Teacher Deshboard</title>
</head>
<body>
    <header>
        @include('teacher/index_nav_bar')
    </header>
    @include('partial/error_success')
    <main class="">
        @include('common')
    </main>
    {{-- <footer>
        @include('index_footer')
    </footer> --}}
</body>
</html>
