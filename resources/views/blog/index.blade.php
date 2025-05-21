@extends('layouts.app')
@section('title', 'Blog - Wizemode')
@section('meta_description', 'Read the latest news and insights from Wizemode.')
@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold mb-6">Blog</h1>
    @foreach($posts as $post)
        <div class="mb-8 border-b pb-4">
            <a href="{{ route('blog.show', $post->slug) }}" class="text-2xl font-semibold text-blue-700 hover:underline">{{ $post->title }}</a>
            <p class="text-gray-600 mt-2">{{ Str::limit($post->description, 120) }}</p>
        </div>
    @endforeach
</div>
@endsection
