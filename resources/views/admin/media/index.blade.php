@extends('layouts.model')

@section('content')
    
<h1>Media</h1>

@if ($photos)
    

<table class="table">
    <thead class="thead-info">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach ($photos as $photo)
            
       
      <tr>
        
        <td>{{$photo->id}}</td>
        <td><img src="{{$photo->file}}" 
        style="vertical-align: middle;
          width: 50px;
          height: 50px;
          border-radius: 50%;"></td>
        <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif

@endsection