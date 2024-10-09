<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    @include('includes.header')

<body class="g-sidenav-show bg-gray-100">



    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('includes.sidebar')


    <main class="main-content position-relative border-radius-lg">
        @include('includes.navbar')

        @yield('content')
    </main>


    @include('includes.script')
</body>

</html>
