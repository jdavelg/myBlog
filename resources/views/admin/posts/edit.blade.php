@extends('layouts.model')

@section('content')
    
<h1>Edit Post</h1>
<div>
<img src="{{$post->photo->file}}" style=" vertical-align: middle;
width: 150px;
height: 150px;
border-radius: 50%;  display: block;
  margin-left: auto;
  margin-right: auto;">
</div>

<form method="POST" action="{{route('posts.update', $post->id)}}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    
    <div class="form-group">
      <label for="title">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{$post->title}}">
      
      @error('title')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
    <div class="form-group">
        
<textarea name="body" id="body" class="@error('body') is-invalid @enderror" placeholder="Escribe Tu Post" style="resize: both; width: 100%"> {{$post->body}}</textarea>
@error('body')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror    

</div>
    <div class="form-group">
      <label for="category_id">Categoria</label>
      <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
        @if ($post->category_id != null)
        <option selected value="{{$post->category->id}}">{{$post->category->name}}</option>
        @endif
      
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option> 
        @endforeach
       
        
      </select>
      @error('category_id')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror 
    </div>

  
        <div class="form-group">
          <label for="photo_id">Insertar Imagen</label>
          <input type="file" class="form-control-file" id="photo_id" name="photo_id">
        </div>        
        <button type="submit" class="btn btn-primary">Guardar</button>

        
         <div> 
             
                 
         
     
  </form>
  
  
@endsection