<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Rol::create($request->all());

        return redirect()->route('ajustes.index')->with('success', 'Rol creado exitosamente.');
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();

        return redirect()->route('ajustes.index')->with('success', 'Rol eliminado exitosamente.');
    }
}
