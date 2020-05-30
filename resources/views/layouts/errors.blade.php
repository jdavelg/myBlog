@section('errors')
@if (count($errors)>0)
<div class="alert aler-danger">
    <ul>
        @foreach ($errors as $error)
    <li>{{$error}}</li> 
        @endforeach
    </ul>

</div>
    
@endif
@show