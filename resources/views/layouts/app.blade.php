<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel'). ' - ' . $title }}</title>

        {{--Styles--}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.2/ui/trumbowyg.min.css" integrity="sha512-K87nr2SCEng5Nrdwkb6d6crKqDAl4tJn/BD17YCXH0hu2swuNMqSV6S8hTBZ/39h+0pDpW/tbQKq9zua8WiZTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{--Scripts--}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.2/trumbowyg.min.js" integrity="sha512-mBsoM2hTemSjQ1ETLDLBYvw6WP9QV8giiD33UeL2Fzk/baq/AibWjI75B36emDB6Td6AAHlysP4S/XbMdN+kSA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="text-light bg-black">

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <x-header/>
            </header>

            <!-- Page Content -->
            <main class="container min-vh-100">
{{--                @yield('content')--}}
                {{ $slot }}
            </main>

        <footer class="bg-dark py-3 mt-3 border-top">
            <x-footer/>
        </footer>

    </body>
</html>
