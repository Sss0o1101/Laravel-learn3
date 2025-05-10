@extends('layouts.app2')

@section('title', '投稿一覧')

@section('content')
<h1>2の投稿一覧</h1>
@foreach ($posts as $post)
    <div>
        <h2>タイトル：{{ $post->title }}</h2>
        <p>本文：{{ $post->body }}</p>
    </div>
@endforeach
@endsection
