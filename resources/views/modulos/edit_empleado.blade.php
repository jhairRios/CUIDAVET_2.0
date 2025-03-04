@extends('welcome')

@section('contenido')
    <section class="content-header">
        <h1>Editar Empleado</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('empleados.update', $empleado->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Campos del formulario -->
                    <div class="form-group col-md-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control" value="{{ $empleado->apellido }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" value="{{ $empleado->telefono }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tel_alternativo">Teléfono Alternativo</label>
                        <input type="text" name="tel_alternativo" class="form-control" value="{{ $empleado->tel_alternativo }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" class="form-control" value="{{ $empleado->direccion }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" class="form-control" value="{{ $empleado->correo }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="contrasenia">Contraseña</label>
                        <input type="password" name="contrasenia" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="id_rol">Rol</label>
                        <select name="id_rol" class="form-control" required>
                            <!-- Opciones de roles -->
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="f_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="f_nacimiento" class="form-control" value="{{ $empleado->f_nacimiento }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="genero">Género</label>
                        <select name="genero" class="form-control" required>
                            <option value="M" {{ $empleado->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                            <option value="F" {{ $empleado->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control">
                        @if($empleado->foto)
                            <img src="{{ asset('storage/' . $empleado->foto) }}" alt="Foto del empleado" width="100">
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fecha_contratacion">Fecha de Contratación</label>
                        <input type="date" name="fecha_contratacion" class="form-control" value="{{ $empleado->fecha_contratacion }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="id_departamento">Departamento</label>
                        <select name="id_departamento" class="form-control" required>
                            <!-- Opciones de departamentos -->
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="dias_laborales">Días Laborales</label>
                        <input type="text" name="dias_laborales" class="form-control" value="{{ $empleado->dias_laborales }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="turno">Turno</label>
                        <select name="turno" class="form-control" required>
                            <option value="Manana" {{ $empleado->turno == 'Manana' ? 'selected' : '' }}>Mañana</option>
                            <option value="Tarde" {{ $empleado->turno == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                            <option value="Noche" {{ $empleado->turno == 'Noche' ? 'selected' : '' }}>Noche</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="salario">Salario</label>
                        <input type="number" name="salario" class="form-control" value="{{ $empleado->salario }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="id_moneda">Moneda</label>
                        <select name="id_moneda" class="form-control" required>
                            <!-- Opciones de monedas -->
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="estado">Estado</label>
                        <select name="estado" class="form-control" required>
                            <option value="Activo" {{ $empleado->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                            <option value="Inactivo" {{ $empleado->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </section>
@endsection