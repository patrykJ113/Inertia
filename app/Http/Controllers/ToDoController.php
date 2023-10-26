<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $todos = ToDo::all();

        return Inertia('Home', [
            'toDoArray' => $todos
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid_todo = $request->validate([
            'title' => 'required|max:30',
            'description' => 'max:255',
            'flag' => 'nullable'
        ]);

        ToDo::create($valid_todo);
    }

    /**
     * Display the specified resource.
     */
    public function show(ToDo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToDo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDo $todo)
    {

        $valid_todo = $request->validate([
            'title' => 'required|max:30',
            'description' => 'max:255',
            'completed' => 'boolean',
            'flag' => 'boolean'
        ]);

        $todo->update($valid_todo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDo $todo)
    {
        $todo->delete();
    }
}
