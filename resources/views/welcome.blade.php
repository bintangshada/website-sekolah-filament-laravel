<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Selamat Datang di Website Sekolah</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('blog.index') }}">Blog</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <small>&copy; {{ date('Y') }} Website Sekolah</small>
    </footer>
</body>
</html>
