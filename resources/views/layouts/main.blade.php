<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet" />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css"
        rel="stylesheet" />
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js" defer></script>

    <!-- app.css -->
    <link
        href="{{ URL::asset('css/app.css') }}"
        rel="stylesheet" />

    @yield('css')

</head>

<body>
    {{-- @include('layouts.loader') --}}
    @include('layouts.navbar')

    <!-- [ Main Content ] start -->
    <div>
        @yield('content')
    </div>
    <!-- [ Main Content ] end -->

    {{-- @include('layouts.footer') --}}
    @yield('scripts')
</body>
<!-- [Body] end -->

</html>