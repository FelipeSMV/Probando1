@extends('layouts.master') 
@section ('title', 'home')
@section('header')
@section ('content')
<hr>
<form class="row g-3" action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre del producto</label>
  <input type="text" class="form-control" id="nproducto">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Código del producto</label>
  <input type="number" class="form-control" id="cproducto" >
</div>


<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Buscar producto</button>
  </div>
</form>
<hr>
@stop 