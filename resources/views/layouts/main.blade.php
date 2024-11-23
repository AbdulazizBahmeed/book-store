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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Delius+Unicase:wght@400;700&display=swap" rel="stylesheet">

    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css"
        rel="stylesheet" />
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js" defer></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>

    <!-- data tables -->
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet" href="style.css">
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js" defer></script>

    <!-- app.css -->
    <link
        href="{{ URL::asset('css/app.css') }}"
        rel="stylesheet" />

    <!-- app.js -->
     <script src="{{ URL::asset('js/app.js') }}" defer></script>

    @yield('css')

</head>

<body class="position-relative min-vh-100 w-100">
    <!-- navbar  -->
    @include('layouts.navbar')



    @if(request()->is('dashboard/*'))
    <div class="d-flex">
        <!-- sidebar -->
        @include('layouts.sidebar')
        <!-- sidebar -->
        <div class="container w-100 px-4 pt-4 mb-5">
            @yield('content')
        </div>
    </div>
    @else

    @yield('content')

    @endif

    <!-- footer -->
    @include('layouts.footer')

    @yield('scripts')
</body>
<!-- [Body] end -->

</html>