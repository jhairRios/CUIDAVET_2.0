@extends('welcome')

@section('contenido')
<div class="login-box">
  <div class="login-box-body">
    <!-- Logo de la veterinaria -->
    <div class="login-logo">
      <img src="dist/img/logo_cuidavet_azul.png" alt="Logo de CUIDAVET" style="width: 100px">
    </div>
    <!-- Título del formulario -->
    <p class="login-box-msg" style="color: #0d98ba; font-weight: bold; margin-bottom: 1.5rem; font-size: 30px">Registro de Cliente</p>
    <!-- Formulario de registro de cliente -->
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
      <!-- Campos del formulario -->
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Género" name="genero" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="DNI" name="dni" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="contrasenia" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Teléfono Alternativo" name="tel_alternativo">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo" name="correo" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Dirección" name="direccion" required>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nacionalidad" name="id_nacionalidad" required>
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Moneda" name="id_moneda" required>
        <span class="glyphicon glyphicon-usd form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="hidden" name="id_rol" value="3">
      </div>
      <div class="form-group has-feedback">
        <select name="estado" class="form-control" required>
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
        </select>
      </div>
      <!-- Botón de registro -->
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection