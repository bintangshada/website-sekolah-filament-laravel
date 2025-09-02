@extends('template')

@section('content')
    <section class="section header" style="text-align:center; padding: 80px 0;">
        <h1 style="font-size:5rem; margin-bottom:1rem;">404</h1>
        <h2>Halaman tidak ditemukan</h2>
        <p>Maaf, halaman yang Anda cari tidak tersedia.</p>
        <a href="{{ url('/') }}" class="btn-getstarted">Kembali ke Beranda</a>
    </section>
@endsection