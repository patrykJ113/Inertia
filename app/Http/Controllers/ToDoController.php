<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $toDos = ToDo::all();

        // dd($toDos);

        return Inertia('Home', [
            'toDoArray' => $toDos
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
        // dd($request->all()['toDo']);
        $valid_toDo = $request->validate([
            'title' => 'required|max:30',
            'description' => 'max:255',
            'flag' => 'nullable'
        ]);

        ToDo::create($valid_toDo);

        // dd($valid_toDo);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
