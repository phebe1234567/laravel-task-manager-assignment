<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
 
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:255|unique:tasks',
            'description' => 'nullable|max:500',
            'scheduled_date' => 'nullable|date',
            'start_time' => 'nullable',
            'reminder_time' => 'nullable'
        ]);

        Task::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'scheduled_date' => $validated['scheduled_date'],
            'start_time' => $validated['start_time'],
            'reminder_time' => $validated['reminder_time'],
            'is_completed' => false
        ]);

        return redirect('/tasks')->with('success', 'Task created successfully!');
    }

    public function markComplete(Task $task)
    {
        $task->is_completed = true;
        $task->save();

        return redirect('/tasks')->with('success', 'Task marked complete!');
    }
    public function show(int $id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }
}