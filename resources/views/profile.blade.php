<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile IKMI Cirebon - Laravel 01</title>
    <link rel="shortcut icon" href="{{ asset('logo-ikmi.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="tracking-tighter bg-slate-50">
    <header>
        <img class="w-full" src="{{ asset('header.jpeg') }}" alt="Header">
    </header>
    <main class="p-5 md:py-10 md:px-24">
        <h1 class="text-3xl font-semibold text-gray-800">Profil Singkat STMIK IKMI Cirebon</h1>
        <div class="w-full md:w-3/4">
            @foreach ($descriptions as $d)
                <p class="mt-5 leading-relaxed text-slate-800">{{ $d['des'] }}</p>
            @endforeach
            <iframe class="w-full aspect-video mt-10 rounded-lg" src="https://www.youtube.com/embed/{{ $yt }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <em class="text-slate-700 mt-5">Source:
                <a class="font-semibold underline text-blue-600" href="{{ $source }}">{{ $source }}</a>
            </em>
        </div>
    </main>
    <footer class="w-full py-3 text-center mt-5 text-sm text-gray-800">
        Created by <a href="http://github.com/fadlar" class="italic text-blue-600">{{ $author }}</a>
    </footer>
</body>

</html>
