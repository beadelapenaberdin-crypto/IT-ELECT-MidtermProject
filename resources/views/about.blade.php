<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Curriculum Vitae</title>
    <link rel="stylesheet"href="{{ asset('style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('gallery') }}">Gallery</a>
    </nav>
    <h1>Curriculum Vitae</h1>
    
    <div class="cv-section">
        <h2>Personal Information</h2>
        <p><strong>Name:</strong> Bea Berdin</p>
        <p><strong>Email:</strong> beadelapenaberdin@example.com</p>
        <p><strong>Phone:</strong> 09893747572</p>
        <p><strong>Location:</strong> Manduae City, Cebu</p>
    </div>
    
    <div class="cv-section">
        <h2>Education</h2>
        <ul>
            <li><strong>Bachelor of Science in Information Technology</strong> - University of Cebu, 2023-2027</li>
            <li><strong>High School Diploma</strong> - Himbangan National High School, 2017-2020</li>
        </ul>
    </div>
    
</body>
</html>