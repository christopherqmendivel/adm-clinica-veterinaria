<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;

class ClinicaController extends Controller
{
    /**
     * Retorna todas las clínicas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Clinica::all());
    }

    /**
     * Almacena una nueva clínica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        $clinica = Clinica::create($validated);

        return response()->json($clinica, 201);
    }

    /**
     * Retorna la clínica específica por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinica = Clinica::findOrFail($id);

        return response()->json($clinica);
    }

    /**
     * Actualiza la clínica específica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        $clinica = Clinica::findOrFail($id);
        $clinica->update($validated);

        return response()->json($clinica, 200);
    }

    /**
     * Elimina la clínica específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinica = Clinica::findOrFail($id);
        $clinica->delete();

        return response()->json(['message' => 'Clinica eliminada exitosamente']);
    }
}
