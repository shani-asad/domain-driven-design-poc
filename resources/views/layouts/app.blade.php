<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class=" bg-gray-200">
<nav class=" p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
        <li>
            <a href="{{ route('clinics') }}" class="p-3">View Clinic</a>
        </li>
        <li>
            <a href="{{ route('registerClinic') }}" class="p-3">Register Clinic</a>
        </li>
    </ul>
</nav>
@yield('content')
</body>
</html>
