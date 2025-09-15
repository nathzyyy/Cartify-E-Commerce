<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartify</title>
    @vite('resources/css/app.css') <!-- Tailwind -->
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Header -->
    @include('include.header')

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer (optional) -->
    <footer class="bg-gray-900 text-gray-300 py-6 text-center">
        © {{ date('Y') }} Cartify. All rights reserved.
    </footer>

</body>
</html>
