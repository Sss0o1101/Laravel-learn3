<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-gray-100">

    <header class="bg-green-500">
        <h1>インスタグラム風アプリ</h1>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer class="bg-white shadow">
        <p>インスタグラム風アプリ</p>
    </footer>


</body>
</html>
