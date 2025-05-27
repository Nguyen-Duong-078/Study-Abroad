<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--=====TITLE=======-->
    <title>DU HỌC HÀN QUỐC</title>
    <!--=====FAV ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/client/img/image/logo-web.png" />

    <!--=====CSS=======-->
    @include('client.layouts.partials.style')

    <!--=====JQUERY=======-->
    @include('client.layouts.partials.jquery')

</head>

<body>

    <!--=====HEADER START=======-->
    @include('client.layouts.partials.header')
    <!--=====HEADER END=======-->

    @yield('content')

    <!--=====Footer start=======-->
    @include('client.layouts.partials.footer')
    <!--=====Footer end=======-->

    <!--=====JS=======-->
    @include('client.layouts.partials.script')
    <!--=====END JS=======-->
</body>

</html>
