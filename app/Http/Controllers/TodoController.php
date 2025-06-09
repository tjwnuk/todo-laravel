<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;


class TodoController extends Controller
{
    public function index()
    {
        // $tasks = [
        //     [
        //         'name' => 'Nazwa zadania',
        //         'description' => 'Opis zadania',
        //         'priority' => 'Wysoki',
        //         'status' => 'Do zrobienia',
        //         'due_date' => '2025-06-10',
        //     ],
        //     [
        //         'name' => 'Zadanie 2',
        //         'description' => 'Opis drugiego zadania',
        //         'priority' => 'Średni',
        //         'status' => 'W trakcie',
        //         'due_date' => '2025-06-15',
        //     ]
        // ];

        $tasks = TodoItem::all();

        return view('todo', compact('tasks'));
    }
}
