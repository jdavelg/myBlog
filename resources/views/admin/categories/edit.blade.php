@extends('layouts.model')

@section('content')



<div class="col-sm-9" style=" display: block;
margin-left: auto;
margin-right: auto;
margin-top: 25px;
">
<div class="card">
    <h5 class="card-header bg-info mb-3" style="text-align: center">Editar Categoria</h5>
    <div class="card-body">
        <form action="{{route('categories.update', $category->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
            <label for="name" style=" text-align: center; margin-left: 38%">Nombre De Categoria</label>
            <input type="text" name="name" value="{{$category->name}}" style=" display: block;
            margin-left: auto;
            margin-right: auto;">
            </div>
      <button class="btn btn-outline-info" style="vertical-align: center;margin-left: auto;
      margin-right: auto;display: block;">Guardar</button>
    </div>
  </div>
    


</form>
    
@endsection