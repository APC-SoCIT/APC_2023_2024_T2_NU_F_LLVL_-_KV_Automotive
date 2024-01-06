<!-- resources/views/layouts/app-no-navbar.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Your head content goes here -->
</head>
<body>
    @include('sidebar') <!-- Include the sidebar -->

    <div class="flex flex-col min-h-screen">
        <!-- Your existing content goes here -->
        @yield('content')
    </div>
</body>
</html>
