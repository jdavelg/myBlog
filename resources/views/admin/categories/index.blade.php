@extends('layouts.model')

@section('content')
    <h1>Categories </h1>


<div class="col-sm-6" style=" display: block;
margin-left: auto;
margin-right: auto;
float: right;">
<div class="card">
    <h5 class="card-header bg-info mb-3">Crear Categoria</h5>
    <div class="card-body">
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Nombre De categoria</label>
            <input type="text" name="name">
            </div>
      <button class="btn btn-outline-info" style="vertical-align: center;margin-left: auto;
      margin-right: auto;display: block;">Crear</button>
    </div>
  </div>
    


</form>

</div>


    <div class="col-sm-5">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">FECHA DE CREACION</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          
            @if ($categories)
                
           
           @foreach ($categories as $category)
               
           <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->created_at->diffForHumans()}}</td>
            <td>

                
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'categories.destroy', $category->id ] ]) }}
                {{ Form::submit('Eliminar', ['class' => 'btn btn-sm btn-outline-danger']) }}
            {{ Form::close() }}
            <a href="{{route('categories.edit', $category->id)}}" type="button" class="btn btn-outline-success" style="margin-top: 8px" >Editar</a>
            </td>
        </tr>
            @endforeach
            @endif
         
        </tbody>
      </table>
    </div>
@endsection