@extends('layouts.model')

@section('content')
    
<h1>Create Posts</h1>


<form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title">
      
      @error('title')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
    <div class="form-group">
        
<textarea name="body" id="body" class="@error('body') is-invalid @enderror" placeholder="Escribe Tu Post" style="resize: both; width: 100%"></textarea>
@error('body')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror    

</div>
    <div class="form-group">
      <label for="category_id">Categoria</label>
      <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
        @foreach ($categories as $category)
        <option  value="{{$category->id}}">{{$category->name}}</option> 
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