<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpleadosController;

// Ruta para la página principal
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('Inicio');
    } else {
        return redirect()->route('loginempleados');
    }
});

// Ruta para la página de ajustes
Route::get('/Ajustes', function () {
    return view('modulos.ajustes');
})->name('Ajustes');

// Ruta para la página de clientes
Route::get('/Clientes', function () {
    return view('modulos.clientes');
})->name('Clientes');

// Ruta para la página de mascotas
Route::get('/Mascotas', function () {
    return view('modulos.mascotas');
})->name('Mascotas');

// Ruta para la página de usuarios
Route::get('/Usuarios', function () {
    return view('modulos.usuarios');
})->name('Usuarios');

// Ruta para la página de veterinarios
Route::get('/Veterinarios', function () {
    return view('modulos.veterinarios');
})->name('Veterinarios');

// Ruta para la página de citas
Route::get('/Citas', function () {
    return view('modulos.citas');
})->name('Citas');

// Ruta para la página de internaciones
Route::get('/Internaciones', function () {
    return view('modulos.internaciones');
})->name('Internaciones');

// Ruta para la página de cajas
Route::get('/Cajas', function () {
    return view('modulos.cajas');
})->name('Cajas');

// Ruta para la página de categorías
Route::get('/Categorias', function () {
    return view('modulos.categorias');
})->name('Categorias');

// Ruta para la página de gestor de productos
Route::get('/GestorProductos', function () {
    return view('modulos.gestor_productos');
})->name('GestorProductos');

// Ruta para la página de inventario
Route::get('/Inventario', function () {
    return view('modulos.inventario');
})->name('Inventario');

// Ruta para la página de compras
Route::get('/Compras', function () {
    return view('modulos.compras');
})->name('Compras');

// Ruta para la página de ventas
Route::get('/Ventas', function () {
    return view('modulos.ventas');
})->name('Ventas');

// Ruta para la página de informes
Route::get('/Informes', function () {
    return view('modulos.informes');
})->name('Informes');
//Route::get('RegistrarEmpleado', [EmpleadosController::class, 'create']);

Auth::routes(['login' => false]); // Deshabilitar la ruta de login predeterminada

// Ruta para el inicio de sesión
Route::get('/loginempleados', [LoginController::class, 'showLoginForm'])->name('loginempleados');
Route::post('/loginempleados', [LoginController::class, 'login'])->name('loginempleados');

// Ruta para la página de inicio
Route::get('/Inicio', function () {
    return view('modulos.Inicio');
})->name('Inicio');