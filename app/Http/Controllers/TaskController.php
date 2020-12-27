<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->input('title');
        $request->input('body');

        Task::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        return redirect('/tasks');
    }
}