<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\RedirectResponse;
use Illuminate\view\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
            $tasks = task::latest()->paginate(3);
        return view('index',['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success','nueva tarea creada exitosamente' );
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        ($task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task): view
    {
       return view('edit',['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','nueva tarea editada exitosamente' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','nueva tarea eliminada exitosamente' );

    }
}
