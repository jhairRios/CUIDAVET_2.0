<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('modulos.clientes', compact('clientes'));
    }

    public function create()
    {
        return view('modulos.create_cliente');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('Clientes')->with('success', 'Cliente creado correctamente.');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('modulos.edit_cliente', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('Clientes')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('Clientes')->with('success', 'Cliente eliminado correctamente.');
    }
}
