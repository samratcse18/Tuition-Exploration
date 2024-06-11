<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tution-Exploration</title>
    <style>
        @keyframes hero-thumb-animation {
            0%, 100% {
            transform: translateY(0);
            }
            50% {
            transform: translateY(-20px);
            }
        }
        .shape-1 {
            animation: hero-thumb-animation 3s linear infinite alternate;
        }
    </style>
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
        @include('common')
    </main>
    <footer>
        @include('index_footer')
    </footer>
</body>
</html>
