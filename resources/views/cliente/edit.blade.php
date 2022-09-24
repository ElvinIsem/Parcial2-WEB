@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR CLIENTE</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
<label for="" class="form-label">CODIGO</label>
<input id="codigo" name="codigo" type="text" class="form-control" value="{{$cliente->codigo}}">
</div>

<div class="mb-3">
<label for="" class="form-label">NOMBRE</label>
<input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombre}}">
</div>

<div class="mb-3">
<label for="" class="form-label">APELLIDO</label>
<input id="apellido" name="apellido" type="text" class="form-control" value="{{$cliente->apellido}}">
</div>

<div class="mb-3">
<label for="" class="form-label">DIRECCION</label>
<input id="direccion" name="direccion" type="text" class="form-control" value="{{$cliente->direccion}}">
</div>

<div class="mb-3">
<label for="" class="form-label">TELEFONO</label>
<input id="telefono" name="telefono" type="text" class="form-control" value="{{$cliente->telefono}}">
</div>


<a href="/clientes" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>




@endsection