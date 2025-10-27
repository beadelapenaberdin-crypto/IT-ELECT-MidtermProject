<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Photos</title>
    <link rel="stylesheet"href="{{ asset('style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('gallery') }}">Gallery</a>
    </nav>
    <h1>Photo Gallery</h1>
    <p>Here are 15 photos of me</p>
    <div class="gallery">
          <img src="Me/IMG-20250913-WA0022.jpg" alt="Photo 1">
        <img src="Me/hasdhg.jpg" alt="Photo 2">
        <img src="Me/gusg.jpg" alt="Photo 3">
        <img src="Me/IMG-20250913-WA0018.jpg" alt="Photo 4">
        <img src="Me/IMG-20250913-WA0026.jpg" alt="Photo 5">
        <img src="Me/IMG-20250913-WA0029.jpg" alt="Photo 6">
        <img src="Me/PXL_20250223_185157346.jpg" alt="Photo 7">
        <img src="Me/PXL_20250224_150106062.jpg" alt="Photo 8">
        <img src="Me/PXL_20250308_202606575.jpg" alt="Photo 9">
        <img src="Me/PXL_20250309_173508832.jpg" alt="Photo 10">
        <img src="Me/PXL_20250319_173937456.jpg" alt="Photo 11">
        <img src="Me/PXL_20250404_141925797.jpg" alt="Photo 12">
        <img src="Me/PXL_20250406_202831113.jpg" alt="Photo 13">
        <img src="Me/PXL_20250510_142444307.jpg" alt="Photo 14">
        <img src="Me/wtyqt.jpg" alt="Photo 15">
    </div>
</body>
</html>