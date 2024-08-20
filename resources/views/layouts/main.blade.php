<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('build/assets/app-D-sv12UV.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-H1p8gvK4.js') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.create') }}">Create Post</a>
                </li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
