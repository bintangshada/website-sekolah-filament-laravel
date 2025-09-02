@php
    use Illuminate\Support\Str;
@endphp

@extends('template')

@section('content')
    <h1>Blog</h1>
    <div>
        @foreach ($posts as $post)
            <div style="margin-bottom: 2rem;">
                <h2>
                    <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                </h2>
                @if ($post->image)
                    <img src="{{ Storage::disk('s3')->url($post->image) }}" alt="{{ $post->title }}" style="max-width:300px;">
                @endif
                <p>{{ Str::limit($post->content, 150) }}</p>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection