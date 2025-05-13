@extends('layouts.app2')

@section('title', '投稿一覧')

@section('content')
<x-alert type="warning">
    これは警告メッセージです。
</x-alert>
<h1 class="text-center">2の投稿一覧</h1>
@foreach ($posts as $post)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <h2>タイトル：{{ $post->title }}</h2>
        <p>本文：{{ $post->body }}</p>
        <button class="bg-blue-800 text-white px-4 py-2 rounded">
            投稿する
        </button>
    </div>
@endforeach
@endsection
