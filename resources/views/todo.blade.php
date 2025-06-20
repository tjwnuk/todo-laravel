<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>todo-laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
        <div>
            <div class="title">todo-laravel</div>
            <div class="tjwnuk">by <a href="https://github.com/tjwnuk" class="tjwnuk" target="_blank" rel="noopener noreferrer">tjwnuk</a></div>
        </div>
        
        <a href="{{ url('/todo/create') }}" class="btn btn-success btn-md">Create</a>

        <div class="menu-container">
            <div class="menu-button">Sort by ▾</div>
            <div class="menu-dropdown" id="menuDropdown">
                <a href="/todo">Default</a>
                <a href="/todo/sort/priority">Priority</a>
                <a href="/todo/sort/status">Status</a>
                <a href="/todo/sort/deadline">Deadline</a>
            </div>
        </div>

        @auth
        <div class="user-dropdown">
            <div class="user-button">{{ Auth::user()->name }} ▾</div>
            <div class="user-dropdown-content">
                <!-- <a href="{{ route('dashboard') }}">Dashboard</a> -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Log out</button>
                </form>
            </div>
        </div>
        @endauth
        
        
        <!-- <div class="menu">&#9776;</div> -->
    </header>

    <main>
        @foreach ($tasks as $task)
        <div class="task">
            <h2>{{ $task['name'] }}</h2>
            <p class="description">{{ $task['description'] }}</p>
            <p><strong>Priority:</strong> {{ $task['priority'] }}</p>
            <p><strong>Status:</strong> {{ $task['status'] }}</p>
            <p><strong>Deadline:</strong> {{ $task['deadline'] }}</p>
        </div>
        @endforeach
    </main>

    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>
