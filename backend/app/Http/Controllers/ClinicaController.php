<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clinica;


class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicas = Clinica::all();
        return view('clinicas.index', compact('clinicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255|unique:clinicas',
            'telefono' => 'required|string|max:255',
        ]);

        Clinica::create($validated);
        return redirect()->route('clinicas.index')->with('success', 'Clínica creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clinica $clinica)
    {
        return view('clinicas.show', compact('clinica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinica $clinica)
    {
        return view('clinicas.edit', compact('clinica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinica $clinica)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255|unique:clinicas,correo_electronico,' . $clinica->id,
            'telefono' => 'required|string|max:255',
        ]);

        $clinica->update($validated);
        return redirect()->route('clinicas.index')->with('success', 'Clínica actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clinica $clinica)
    {
        $clinica->delete();
        return redirect()->route('clinicas.index')->with('success', 'Clínica eliminada exitosamente.');
    }
}
