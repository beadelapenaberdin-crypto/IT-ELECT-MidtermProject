<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"href="{{ asset('style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel Website</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('gallery') }}">Gallery</a>
    </nav>
    <h1>Welcome to Laravel Website</h1>
    
 
    <h2>What is Laravel and How to Set Up</h2>
    <p>Laravel is a popular open-source PHP web framework designed for building web applications following the model-view-controller (MVC) architectural pattern. It provides elegant syntax, robust features like routing, authentication, and database management, making it easier to develop scalable and maintainable web apps. Laravel was created by Taylor Otwell and first released in 2011. It's widely used for projects ranging from simple websites to complex enterprise applications.</p>
    
    <h3>3. Setting Up Laravel</h3>
    <p>Follow these steps to install and configure Laravel on your computer.</p>
    <p>Before installing Laravel, make sure you have the following installed:</p>
    <ul>
        <li>PHP ≥ 8.1</li>
        <li>Composer (dependency manager for PHP)</li>
        <li>MySQL or MariaDB (for database)</li>
        <li>Web Server: Apache or Nginx</li>
    </ul>
    
    <h4>Step 1: Prerequisites</h4>
    <p>Ensure all prerequisites are installed and configured properly.</p>
    
    <h4>Step 2: Installing Laravel</h4>
    <p>You can install Laravel in two ways:</p>
    <ol>
        <li><strong>Option 1: Using Composer</strong><br>Run the following command:<br><code>composer create-project –prefer-dist laravel/laravel myproject</code></li>
        <li><strong>Option 2: Using Laravel Installer</strong><br>Install the Laravel installer globally:<br><code>composer global require laravel/installer</code><br>Then create a new project:<br><code>laravel new myproject</code></li>
    </ol>
    
    <h4>Step 3: Directory Structure Overview</h4>
    <p>After installation, your Laravel project will include folders such as:</p>
    <ul>
        <li><code>app/</code>: Application logic (models, controllers, etc.)</li>
        <li><code>routes/</code>: Web and API routes</li>
        <li><code>resources/</code>: Views and front-end files</li>
        <li><code>database/</code>: Migrations and seeders</li>
        <li><code>config/</code>: Configuration files</li>
        <li><code>public/</code>: Entry point for the web server</li>
    </ul>
    
    <h4>Step 4: Running the Development Server</h4>
    <p>Navigate to your Laravel project directory and run:</p>
    <ul>
        <li><code>cd myproject</code></li>
        <li><code>php artisan serve</code></li>
    </ul>
    <p>Then open <code>http://127.0.0.1:8000</code> in your browser to view the Laravel welcome page.</p>
    
    <p>For more details, check the official Laravel documentation at <a href="https://laravel.com/docs" target="_blank">laravel.com/docs</a>.</p>
</body>
</html>