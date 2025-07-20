<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocomart</title>
    @include('layouts.partials.css')
</head>
<body>
    <div class="flex items-center justify-between ">
        @include('layouts.shared.sidebar')
        <div class="main-section-container overflow-auto">
            @include('layouts.shared.navbar')
            <div class="main-section h-screen  ">
                @yield('main_content')
            </div>
            @include('layouts.shared.footer')
        </div>
    </div>
</body>
</html>
@include('layouts.partials.script')
