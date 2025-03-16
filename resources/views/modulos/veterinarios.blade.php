@extends('welcome')

@section('contenido')
    <section class="content-header">
        <h1>Veterinarios</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <!-- Contenido de la página de Veterinarios -->
                <p>Bienvenido a la página de Veterinarios.</p>
                <a href="{{ route('veterinarios.create') }}" class="btn btn-primary">Agregar Veterinario</a>
                @if ($veterinarios->isEmpty())
                    <p class="text-center">No se encuentran veterinarios registrados.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Especialidad</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($veterinarios as $veterinario)
                                <tr>
                                    <td>{{ $veterinario->nombre }}</td>
                                    <td>{{ $veterinario->apellido }}</td>
                                    <td>{{ $veterinario->telefono }}</td>
                                    <td>{{ $veterinario->correo }}</td>
                                    <td>{{ $veterinario->especialidad }}</td>
                                    <td>{{ $veterinario->estado }}</td>
                                    <td>
                                        <a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('veterinarios.destroy', $veterinario->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection