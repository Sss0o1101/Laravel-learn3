@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
<x-alert type="warning">
    警告
</x-alert>
<h1>2のタイトル</h1>
@foreach ($posts as $post)
     <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
@endforeach
@endsection
