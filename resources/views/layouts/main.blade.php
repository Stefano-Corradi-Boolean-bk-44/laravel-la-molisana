<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>La molisana</title>
</head>
<body>

    @include('partials.header')

    {{-- in questo punto carico i contenuti diveri delle varie pagine --}}
    {{-- i contenuti delle pagine li chiamo content ma li posso chiamare come voglio --}}
    @yield('content')

    @include('partials.footer')

</body>
</html>
