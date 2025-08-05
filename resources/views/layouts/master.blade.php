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
<div id="preloader"
     class="fixed inset-0 bg-white z-[9999] flex items-center justify-center">
  <div class="w-10 h-10 border-4 border-gray-300 border-t-[#13694C] rounded-full animate-spin"></div>
</div>
    <div class="flex items-center justify-between ">
        @include('layouts.shared.sidebar')
        <div class="main-section-container overflow-auto">
            @include('layouts.shared.navbar')
            <div class="main-section min-h-screen  ">
                @yield('main_content')
            </div>
            @include('layouts.shared.footer')
        </div>
    </div>
</body>
</html>
@include('layouts.partials.script')
