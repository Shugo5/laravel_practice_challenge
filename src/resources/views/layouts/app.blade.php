<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSSとJavaScript -->
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <style>
            body {
                font-family: 'Lato';
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- ナビバーの内容 -->
            <nav class="navbar navbar-expand-lg bg-dark">
                <a class="navbar-brand" href="/">アンケート管理システム（作成中）</a>
            </nav>
        </div>
        @yield('content')
    </body>
</html>