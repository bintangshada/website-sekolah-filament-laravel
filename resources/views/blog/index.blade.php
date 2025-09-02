@php
    use Illuminate\Support\Str;
@endphp

@extends('template')

@section('content')
<section id="blog" class="section light-background header" style="padding: 60px 0;">
    <div class="container">
        <h1 class="section-title" style="text-align:center; margin-bottom:2rem;">Blog Sekolah</h1>
        <div class="row" style="display:flex; flex-wrap:wrap; gap:2rem; justify-content:center;">
            @forelse ($posts as $post)
                <div class="card" style="background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.07); width:320px; padding:1.5rem; display:flex; flex-direction:column; align-items:center;">
                    @if ($post->image)
                        <img src="{{ Storage::disk('s3')->url($post->image) }}" alt="{{ $post->title }}" style="width:100%; max-width:280px; border-radius:8px; margin-bottom:1rem;">
                    @endif
                    <h2 style="font-size:1.3rem; margin-bottom:0.5rem; text-align:center;">
                        <a href="{{ route('blog.show', $post) }}" style="color:#1a202c; text-decoration:none;">{{ $post->title }}</a>
                    </h2>
                    <p style="color:#555; font-size:1rem; margin-bottom:1rem; text-align:center;">
                        {{ Str::limit($post->content, 120) }}
                    </p>
                    <a href="{{ route('blog.show', $post) }}" class="btn btn-getstarted" style="margin-top:auto;">Baca Selengkapnya</a>
                </div>
            @empty
                <div style="text-align:center; width:100%;">
                    <p>Belum ada postingan blog.</p>
                </div>
            @endforelse
        </div>
        <div style="margin-top:2rem; display:flex; justify-content:center;">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection