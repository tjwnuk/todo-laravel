<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\TodoItem;

use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = TodoItem::where('user_id', Auth::id())->get();

        return view('todo', compact('tasks'));
    }

    public function sortByPriority()
    {
        $tasks = TodoItem::where('user_id', Auth::id())->get()->sortBy(function ($task) {
            return match ($task->priority) {
                'high' => 1,
                'medium' => 2,
                'low' => 3,
                default => 4,
            };
        });

        return view('todo', ['tasks' => $tasks]);
    }

    public function sortByDeadline()
    {
        $tasks = TodoItem::where('user_id', Auth::id())->get()->sortBy('deadline');

        return view('todo', ['tasks' => $tasks]);
    }

    public function sortByStatus()
    {
        $tasks = TodoItem::where('user_id', Auth::id())->get()->sortBy(function ($task) {
            return match ($task->status) {
                'to-do' => 1,
                'in-progress' => 2,
                'done' => 3,
                default => 4,
            };
        });

        return view('todo', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'nullable|integer',
            'status' => 'nullable|string',
            'deadline' => 'nullable|date',
        ]);

        // Add the authenticated user's ID to the validated data
        $validated['user_id'] = Auth::id();

        // Create a new Todo item using the validated data
        $todo = TodoItem::create($validated);

        return redirect('/todo')->with('success', 'Todo created successfully.');

    }
}
