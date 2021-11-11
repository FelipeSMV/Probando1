@extends('layouts.master') 
@section ('title', 'home')
@section('header')
@section('content')
<hr>
<form class="row g-3" action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Ingrese código del producto</label>
  <input type="number" class="form-control" id="cproducto">
</div>
<h1>Datos a actualizar </h1>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nuevo nombre del producto</label>
  <input type="text" class="form-control" id="nproducto">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Precio del producto</label>
  <input type="number" class="form-control" id="precio" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción del producto</label>
  <textarea class="form-control" id="dproducto" rows="3"></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" >Actualizar datos</button>
  </div>
</form>
<hr>
@stop 