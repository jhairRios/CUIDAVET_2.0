<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Departamento::create($request->all());

        return redirect()->route('ajustes.index')->with('success', 'Departamento creado exitosamente.');
    }

    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('ajustes.index')->with('success', 'Departamento eliminado exitosamente.');
    }
}
