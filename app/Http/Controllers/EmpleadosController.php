<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Ajustes;
use App\Models\Moneda;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Ajustes()
    {
        $ajustes = Ajustes::find(1);
        $monedas = Moneda::all(); // Obtén todas las monedas
        return view('modulos.ajustes', compact('ajustes', 'monedas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ajustes = Ajustes::find($id);

        if ($request->hasFile('logo')) {
            // Eliminar el logo anterior si existe
            if (!empty($ajustes->logo)) {
                $path = public_path($ajustes->logo);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // Guardar el nuevo logo en 'public/dist/img/'
            $rutaImg = $request->file('logo')->move(public_path('dist/img'), $request->file('logo')->getClientOriginalName());
            $ajustes->logo = 'dist/img/' . $request->file('logo')->getClientOriginalName();
        }

        // Actualizar otros campos
        $ajustes->telefono = $request->telefono;
        $ajustes->direccion = $request->direccion;
        $ajustes->zona_horaria = $request->zona_horaria;
        $ajustes->id_moneda = $request->id_moneda;

        $ajustes->save();

        return redirect()->route('ajustes.index')->with('success', 'Ajustes actualizados correctamente.');
    }

    // Otros métodos del controlador...
}
