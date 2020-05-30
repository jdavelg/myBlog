@extends('layouts.model')

@section('content')
    
<h1>Create Users</h1>

<div class="card-body">
    <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
@csrf




        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
              
                <option value="1">Activo</option>
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
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>

















    

 @extends('layouts.errors')




@endsection