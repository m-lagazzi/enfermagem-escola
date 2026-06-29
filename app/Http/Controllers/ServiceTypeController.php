<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceTypes = ServiceType::orderBy('name')->paginate(15);
        return view('service-types.index', compact('serviceTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('service-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'active' => 'boolean',
            'requires_medication_detail' => 'boolean',
        ]);

        ServiceType::create([
            'name' => $request->name,
            'active' => $request->boolean('active'),
            'requires_medication_detail' => $request->boolean('requires_medication_detail'),
        ]);
        return redirect()->route('service-types.index')->with('success', 'Tipo de serviço criado com sucesso.');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceType $serviceType)
    {
        return view('service-types.edit', compact('serviceType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceType $serviceType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'active' => 'boolean',
            'requires_medication_detail' => 'boolean',
        ]);

        $serviceType->update([
            'name' => $request->name,
            'active' => $request->boolean('active'),
            'requires_medication_detail' => $request->boolean('requires_medication_detail'),
        ]);
        return redirect()->route('service-types.index')->with('success', 'Tipo de serviço atualizado com sucesso.');
    }

}
