<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 11 Task List App</title>
    @yield('styles')
</head>

<body>
    <h1>@yield('title')</h1>
    <div>
        @if (@session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        
        @yield('content')
    </div>
</body>

</html>
