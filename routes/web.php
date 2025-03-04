<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ClientesController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('Inicio');
    } else {
        return redirect()->route('loginempleados');
    }
});

Route::get('/ajustes', [EmpleadosController::class, 'Ajustes'])->name('ajustes.index');
Route::put('/ajustes/{id}', [EmpleadosController::class, 'update'])->name('ajustes.update');

Route::get('/Clientes', [ClientesController::class, 'index'])->name('Clientes');
Route::get('/Clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/Clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/Clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/Clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/Clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('/Empleados', [EmpleadosController::class, 'index'])->name('Empleados');
Route::get('/Empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/Empleados', [EmpleadosController::class, 'store'])->name('empleados.store');
Route::get('/Empleados/{id}/edit', [EmpleadosController::class, 'edit'])->name('empleados.edit');
Route::put('/Empleados/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');
Route::delete('/Empleados/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');

Route::get('/Mascotas', function () {
    return view('modulos.mascotas');
})->name('Mascotas');

Route::get('/Usuarios', function () {
    return view('modulos.usuarios');
})->name('Usuarios');

Route::get('/Veterinarios', function () {
    return view('modulos.veterinarios');
})->name('Veterinarios');

Route::get('/Citas', function () {
    return view('modulos.citas');
})->name('Citas');

Route::get('/Internaciones', function () {
    return view('modulos.internaciones');
})->name('Internaciones');

Route::get('/Cajas', function () {
    return view('modulos.cajas');
})->name('Cajas');

Route::get('/Categorias', function () {
    return view('modulos.categorias');
})->name('Categorias');

Route::get('/GestorProductos', function () {
    return view('modulos.gestor_productos');
})->name('GestorProductos');

Route::get('/Inventario', function () {
    return view('modulos.inventario');
})->name('Inventario');

Route::get('/Compras', function () {
    return view('modulos.compras');
})->name('Compras');

Route::get('/Ventas', function () {
    return view('modulos.ventas');
})->name('Ventas');

Route::get('/Informes', function () {
    return view('modulos.informes');
})->name('Informes');

Route::get('/perfil', function () {
    return view('modulos.perfil');
})->name('perfil');

//Route::get('RegistrarEmpleado', [EmpleadosController::class, 'create']);

Auth::routes(['login' => false]); // Deshabilitar la ruta de login predeterminada

// Ruta para el inicio de sesión
Route::get('/loginempleados', [LoginController::class, 'showLoginForm'])->name('loginempleados');
Route::post('/loginempleados', [LoginController::class, 'login'])->name('loginempleados');

// Ruta para la página de inicio
Route::get('/Inicio', function () {
    return view('modulos.Inicio');
})->name('Inicio');