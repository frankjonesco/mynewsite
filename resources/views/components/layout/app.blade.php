<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- @vite('resources/css/app.css') --}}

    <link href="{{ asset('build/assets/app-JcPpMjD2.css')}}"  rel="preload" as="style" onload="this.rel='stylesheet'">
    <script src="{{ asset('build/assets/app-I5i9CKeh.js') }}" defer></script>

</head>

<body>
    <main>
        {{$slot}}
    </main>
</body>
</html>