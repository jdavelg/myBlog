@extends('layouts.model')

@section('content')
    
<h1>Edit Users</h1>





<div class="card-body">

<div class="col-md 6"">

<img src="{{$user->photo ? $user->photo->file :'http://placehold.it/400x400' }}" height="150px" width="175px" class="img-responsive img-rounded" style=" display: block;
margin-left: auto;
margin-right: auto;">

</div>

    <form method="POST" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf




        <div class="form-group row" style="margin-top:50px">
            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

            <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required  autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Direccion e-mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="role_id" class="col-md-4 col-form-label text-md-right">Rol</label>
            <div class="col-md-6">
            <select class="custom-select" name="role_id" id="role_id">
              <option value="{{$user->role->id}}" selected>{{$user->role->name}}</option> 
                @foreach ($roles as $role)
              
               <option value="{{$role->id}}">{{$role->name}}</option>
               @endforeach
            
               
              </select>
            </div>
        </div>
        
        
        <div class="form-group row">
            <label for="is_active" class="col-md-4 col-form-label text-md-right">Estado</label>
            <div class="col-md-6">
            <select class="custom-select" name="is_active">
              
                <option selected value="1">Activo</option>
                <option value="0">Inactivo</option>
                
              </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="photo_email" class="col-md-4 col-form-label text-md-right">Imagen</label>
        
        <div class="col-md 6">                               
                  
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo_id">
                              
        </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Guardar
                </button>
            </div>
        </div>
    </form>
    @include('layouts.errors')
</div>

@endsection