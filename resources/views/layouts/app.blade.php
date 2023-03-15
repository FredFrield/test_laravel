<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>
<body>
<main>

    @include('inc.header')

    @if(Request::is('/'))
        @include('inc.hero')
    @endif


    <div class="container mt-5">

        @include('inc.messages')

        <div class="row">
            <div class="col-9">
                @yield('content')
            </div>
            <div class="col-3">
                @include('inc.aside')
            </div>
        </div>
    </div>

    @include('inc.footer')

</main>
</body>
</html>
