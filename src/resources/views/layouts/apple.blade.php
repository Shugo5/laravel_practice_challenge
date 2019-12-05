<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Laravel Quickstart - Basic</title>

        {{-- <!-- CSSとJavaScript -->
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <!-- Scripts -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Lato';
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- ナビバーの内容 -->
            <nav class="navbar navbar-expand-lg bg-warning">
                <a class="navbar-brand" href="/front/index">アンケート管理システム（作成中）</a>
            </nav>
        </div>
        @yield('content')
    </body>
</html>
