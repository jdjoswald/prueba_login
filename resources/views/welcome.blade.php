@extends('layouts.app')
@section('content')




<div class="center">
<div class="card shadow-sm">
    <div class="card-body text-center" >

        <h1>Bienvenido</h1>


        @foreach($query as $q)
            <h3> {{$q->nombres}}  {{$q->apellidos}}</h3>
            
            @endforeach
        

       

    </div>

</div>

</div>

@endsection