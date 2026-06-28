<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionals = Professional::orderBy('name')->paginate(15);
        return view('professionals.index', compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professionals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'active' => 'boolean'
        ]);

        Professional::create([
            'name' => $request->name,
            'active' => $request->boolean('active'),
        ]);
        return redirect()->route('professionals.index')->with('success', 'Profissional criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professional $professional)
    {
        return view('professionals.edit', compact('professional'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professional $professional)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'active' => 'boolean'
        ]);

        $professional->update([
            'name' => $request->name,
            'active' => $request->boolean('active'),
        ]);
        return redirect()->route('professionals.index')->with('success', 'Profissional atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professional $professional)
    {
        //
    }
}
