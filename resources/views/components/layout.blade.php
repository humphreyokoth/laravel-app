<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <nav>
        <x-nav-link href= "/">Home</x-nav-link>
        <x-nav-link href ="/about">About</x-nav-link>
        <x-nav-link href = "/contact">contact</x-nav-link>

        {{-- <a href= "/">Home</a>
        <a href ="/about">About</a>
        <a href = "/contact">contact</a> --}}
    </nav>

    {{ $slot }}
</body>

</html>
