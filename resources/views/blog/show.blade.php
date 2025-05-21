@extends('layouts.app')
@section('title', $post->title)
@section('meta_description', Str::limit($post->description, 150))
@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
    <div class="prose">{{ $post->description }}</div>
</div>
@endsection
