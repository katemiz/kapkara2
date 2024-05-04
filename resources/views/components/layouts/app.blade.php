<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Author: Kılıç Ali Temiz katemiz@gmail.com">
        <meta name="theme-color" content="#317EFB"/>

        <title>{{ config('appconstants.company.name') }} : {{ config('appconstants.company.title') }}</title>

        {{-- INCLUDES --}}
        <link rel="stylesheet" href="{{ asset('/includes/bulma.min.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('/SweetAlert/sweetalert2_min.css') }}"> --}}
        {{-- <script src="{{ asset('/SweetAlert/sweetalert2.min.js') }}"></script> --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}">

        <script src="{{ asset('/includes/js.js') }}"></script>

    </head>
    <body>
        @include('components.layouts.navbar')

        {{ $slot }}

        @include('components.layouts.footer')
    </body>
</html>
