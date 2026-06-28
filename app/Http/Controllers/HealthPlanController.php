<?php

namespace App\Http\Controllers;

use App\Models\HealthPlan;
use Illuminate\Http\Request;

class HealthPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healthPlans = HealthPlan::orderBy('name')->paginate(15);
        return view('health-plans.index', compact('healthPlans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('health-plans.create');
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

        HealthPlan::create([
            'name' => $request->name,
            'active' => $request->boolean('active'),
        ]);
        return redirect()->route('health-plans.index')->with('success', 'Plano de saúde criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HealthPlan $healthPlan)
    {
        return view('health-plans.edit', compact('healthPlan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HealthPlan $healthPlan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'active' => 'boolean'
        ]);

        $healthPlan->update([
            'name' => $request->name,
            'active' => $request->boolean('active'),
        ]);
        return redirect()->route('health-plans.index')->with('success', 'Plano de saúde atualizado com sucesso.');
    }

}
