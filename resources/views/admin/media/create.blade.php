@extends('layouts.model')

@section('content')
<h1>Subir MultiMedia</h1>

<div class="card text-white bg-success" >
    <div class="card-header" style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Subir Imagen</div>
    <div class="card-body">

        <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data"></form>
    
        <input type="file" name="file" id="file">
     
    </div>
  </div>

@endsection