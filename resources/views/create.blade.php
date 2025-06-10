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
    </header>

    <main>

        <h1>Create a new Todo</h1>

        @if ($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/todo') }}" class="mx-auto" style="max-width: 600px;">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control form-control-md">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control form-control-md">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="priority" class="form-label">Priority (number):</label>
                <input type="number" id="priority" name="priority" value="{{ old('priority') }}" class="form-control form-control-md">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="text" id="status" name="status" value="{{ old('status') }}" class="form-control form-control-md">
            </div>

            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline (YYYY-MM-DD):</label>
                <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}" class="form-control form-control-md">
            </div>

            <button type="submit" class="btn btn-primary">Add Todo</button>
            <a href="{{ url('/todo') }}" class="btn btn-secondary ms-2">Cancel</a>
        </form>

    </main>

    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>
