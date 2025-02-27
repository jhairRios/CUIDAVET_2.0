@extends('welcome')

@section('contenido')
    <section class="content-header">
        <h1>Ajustes</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                @if(auth()->user()->id_rol == 1)
                    <form>
                        <div class="row">
                            <div class="col-md-3">
                                <h2>Foto</h2>
                                <input type="file" class="form-control" name="logo">
                                <img src="{{url('dist/img/defecto.png')}}" width="200px">
                            </div>

                            <div class="col-md-3">
                                <h2>Telefono</h2>
                                <input type="text" class="form-control" name="telefono" required
                                data-inputmask="'mask': '+(999) 999-9999'" data-mask>
                            </div>

                            <div class="col-md-3">
                                <h2>Direccion</h2>
                                <input type="text" class="form-control" name="direccion" required>
                            </div>

                            <div class="col-md-3">
                                <h2>Moneda</h2>
                                <input type="text" class="form-control" name="moneda" required>
                            </div>

                            <div class="col-md-3">
                                <h2>Zona Horaria</h2>
                                <select class="form-control" name="zona_horaria" required>
                                    <option value="UTC-05:00">UTC-05:00 - Eastern Time (US & Canada), Bogota</option>
                                    <option value="UTC-03:00">UTC-03:00 - Buenos Aires, Greenland</option>
                                    <option value="UTC+00:00">UTC+00:00 - London, Lisbon</option>
                                    <option value="UTC+01:00">UTC+01:00 - Berlin, Lagos</option>
                                    <option value="UTC+08:00">UTC+08:00 - Beijing, Singapore</option>
                                </select>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>
@endsection