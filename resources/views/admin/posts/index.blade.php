@extends('layouts.model')

@section('content')
    
<h1>Posts</h1>

<table class="table">
    <thead class="thead-success bg-success">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Foto</th>
        <th scope="col">Usuario</th>
        <th scope="col">Categoria</th>
       
        <th scope="col">titulo</th>
        <th scope="col">Cuerpo</th>
        <th scope="col">Fecha de Creacion</th>
        <th scope="col">Actualizado</th>

      </tr>
    </thead>
    <tbody>
        @if ($posts)
        
            @foreach ($posts as $post)
                
            <tr>
            
            <td>{{$post->id}}</td>
            <td>
                @if ($post->photo_id !=null)
                <img src="{{$post->photo->file}}" style="vertical-align: middle;
                width: 50px;
                height: 50px;
                border-radius: 50%">
                @else
                no tiene foto :c 
                @endif
                


                </td>
            <td>{{$post->user_id ? $post->user->name : "no tiene usuario xd"}}</td>
            <td>{{$post->category_id ? $post->category->name : "no tiene categoria"}}</td>
           
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            {{-- <td>{{$post->updated_at->diffForHumans()}}</td> --}}
        </tr> 
            @endforeach
          
        @endif
     
     
    </tbody>
  </table>



@endsection