<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Propietario;
use App\Http\Requests\PropietarioRequest;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //define('NUMERO_DE_PAGINAS', 5);
        $propietarios = Propietario::paginate(5);
        return inertia('Propietarios/Index', ['propietarios' => $propietarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Propietarios/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropietarioRequest $request)
    {
        Propietario::create($request->validated());
        return redirect()->route('propietarios.index');
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
    public function edit(Propietario $propietario)
    {
        return inertia('Propietarios/Edit', ['propietario' => $propietario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropietarioRequest $request, Propietario $propietario)
    {
        $propietario->update($request->validated());
        return redirect()->route('propietarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
        return redirect()->route('propietarios.index');
    }
}
