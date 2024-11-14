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

    @yield('css')

</head>

<body>
    {{-- @include('layouts.loader') --}}
    {{-- @include('layouts.navbar') --}}

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