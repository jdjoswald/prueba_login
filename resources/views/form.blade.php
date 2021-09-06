@extends('layouts.app')
@section('content')




<div class="center">
<div class="card shadow-sm">
    <div class="card-body text-center" >

        <h1>Log in</h1>

        <form action="submit_count" method="post">
        @csrf
            <span><strong>Nombres</strong></span>
            <br>
            <input type="text" name="nombres">
            <br>
            <span><strong>Apellidos</strong></span>
            <br>
            <input type="text" name="apellidos">
            <br>
            <span><strong>Email</strong></span>
            <br>
            <input type="email" name="user">
            <br>
            <span><strong>Password</strong></span>
            <br>
            <input type="password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">   
            <br>
            <br>
           
            <button id='enviar' type="submit" style="display: none;"></button>  
        </form>
        <button onclick="verificar()" class="btn btn-primary">Crear cuenta</button>  

    </div>

</div>

</div>

@endsection


@section('script')


    <script>

        function verificar(){
                
            var myInput = document.getElementById("pass");
                
            var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

            if(myInput.value.match(strongRegex)){ 
                document.getElementById('enviar').click();
            }
            else{
                alert('la contraseña debe tener almenos 8 caracteres, una palabra mayuscula,un numero y un simbolo');
            }
        }

    </script>



 
    
  

 






@endsection

