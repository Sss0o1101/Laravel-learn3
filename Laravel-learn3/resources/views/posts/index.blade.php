@extends('layouts.app2')

@section('title', '投稿一覧')

@section('content')
<h1>投稿一覧</h1>
@foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
@endforeach
@endsection






{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-white text-2xl">

    <h1>投稿一覧!</h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach

</body>
</html> --}}
