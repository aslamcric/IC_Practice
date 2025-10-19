<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = People::all();
        return inertia::render('people/index', ['people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('people/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:people,email',
            'age' => 'required|integer|min:18|max:50',
        ]);

        People::create($request->all());

        return redirect()->route('people.index')->with('success', 'People created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $people = People::findOrFail($id);
        return Inertia::render('people/edit', ['people' => $people]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $people = People::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:people,email,'.$people->id,
            'age' => 'required|integer|min:18|max:50',
        ]);
        $people->update($request->all());
        return redirect()->route('people.index')->with('success', 'People updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $people = People::findOrFail($id);
        $people->delete();
        return redirect()->route('people.index')->with('danger', 'People deleted successfully.');
    }
}
