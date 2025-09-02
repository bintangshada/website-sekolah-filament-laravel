@extends('welcome')

@section('content')
    <h1>{{ $post->title }}</h1>
    @if ($post->image)
        <img src="{{ Storage::disk('s3')->url($post->image) }}" alt="{{ $post->title }}" style="max-width:400px;">
    @endif
    <div>
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('blog.index') }}">← Kembali ke Blog</a>
@endsection