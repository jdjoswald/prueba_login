<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>


<div class="center">
<div class="card shadow-sm">
    <div class="card-body text-center" >

        <h1>Log in</h1>

        <form method="post" action="logon">
            @csrf
            <span><strong>Email</strong></span>
            <br>
            <input type="email" name="user">
            <br>
            <span><strong>Password</strong></span>
            <br>
            <input type="password" name="pass" >   
            <br>
            <br>

           
            <button type="submit" class="btn btn-primary">iniciar sesion</button>  
            <a href="{{url('form')}}">nuevo usuario</a>   
        </form>

    </div>

</div>

</div>



    
</body>
</html>


<style>
    .center {
  margin: auto;
  width: 50%;
  padding: 10px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>