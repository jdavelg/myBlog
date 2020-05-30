@extends('layouts.model')

@section('content')
    <h1>Users</h1>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PHOTO</th>
            <th scope="col">NAME</th>
            <th scope="col">Role</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">FECHA DE CREACION</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @if ($users)
                  
           
          @foreach ($users as $user)
          <tr>
             
                  
             
              <td>{{$user->id}}</td>
          <td>
            @if ($user->photo)
            <img src="{{$user->photo->file}}" alt="avatar" srcset="" class="avatar" style="vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;">  
            @else
                No tiene foto
            @endif
            
          
          </td>
            <td>{{$user->name}}</td>
          <td>
            @if (!isset($user->role->name))
              
            @else
            {{$user->role->name}} 
            @endif
          </td> 
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>
                <a href="#" class="btn btn-danger">Eliminar</a>
                
                <a href="#" class="btn btn-success">Editar</a>
            </td>
          
          </tr>
          @endforeach
            @endif
        </tbody>
      </table>

@endsection