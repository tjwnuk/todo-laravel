<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>todo-laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
    
</head>
<body>
    <header>
        <div>
            <div class="title">todo-laravel</div>
            <div class="tjwnuk">by <a href="https://github.com/tjwnuk" class="tjwnuk" target="_blank" rel="noopener noreferrer">tjwnuk</a></div>
        </div>
    
    </header>

    <main>

        <div class="welcome-container">
            <div class="welcome-title">todo-laravel</div>
            <div class="welcome-description">
                Todo-app done in Laravel 11 for recruitment purposes.
            </div>
            <a href="/login" class="login-button">Log in</a>
        </div>

    </main>

    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>
