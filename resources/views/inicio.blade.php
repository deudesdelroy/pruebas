@extends('layouts/plantilla')

@section('tituloPagina','CRUD')

@section('contenido')
<br><br>
<div class="card">
    <div class="card-header">
      Administar Personas
    </div>
    <div class="card-body">
      <h5 class="card-title">Listado de Personas</h5>
      <p>
          <a href="{{route("personas.crear")}}" class="btn btn-primary">Crear Nuevo</a>
      </p>
      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Nombre</th>
                    <th>F. Nacimiento</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </p>
    </div>
  </div>

@endsection
