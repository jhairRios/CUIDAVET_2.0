<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moneda;

class MonedaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'simbolo' => 'required',
        ]);

        Moneda::create($request->all());

        return redirect()->route('ajustes.index')->with('success', 'Moneda creada exitosamente.');
    }

    public function destroy($id)
    {
        $moneda = Moneda::findOrFail($id);
        $moneda->delete();

        return redirect()->route('ajustes.index')->with('success', 'Moneda eliminada exitosamente.');
    }
}
