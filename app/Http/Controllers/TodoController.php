<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;


class TodoController extends Controller
{
    public function index()
    {
        $tasks = TodoItem::all();

        return view('todo', compact('tasks'));
    }

    public function sortByPriority()
    {
        $tasks = TodoItem::all()->sortBy(function ($task) {
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
        $tasks = TodoItem::all()->sortBy('deadline');

        return view('todo', ['tasks' => $tasks]);
    }

    public function sortByStatus()
    {
        $tasks = TodoItem::all()->sortBy(function ($task) {
            return match ($task->status) {
                'to-do' => 1,
                'in-progress' => 2,
                'done' => 3,
                default => 4,
            };
        });

        return view('todo', ['tasks' => $tasks]);
    }
}
