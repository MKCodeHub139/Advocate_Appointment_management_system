<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')
    @yield('main')
    @include('partials.footer')
    {{-- jquery link --}}
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script>
        $(document).ready(function(){
          $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        })
    </script>
    @yield('scripts')
</body>
</html>