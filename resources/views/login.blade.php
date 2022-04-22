<?php 
use Illuminate\Support\Facades\Route;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/app.css">

<link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/fontawesome.css">
<script src="fontawesome-free-6.1.1-web/js/all.js"></script>

  


</head>

<body class="login-bg">
   
    
    <nav class="navbar fixed-top navbar-expand-sm  navbar-dark " id="nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}"><img src="../resources/images/logo3.jpg" alt="" id="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('cadastrar')}}">Cadstre-se</a>
              </li>
            </ul>
    
          </div>
        </div>
      </nav>




<div class="container-fluid login-bg">
    <div class="row">
        <div class="login mt-2">
            <div>
                <h1 class="text-center h1-login">Entrar</h1>
            </div>
            <div class="text-center">
                <img src="../resources/images/Eventos.gif" class="img-login" alt="...">
            </div>
            <form action="{{route('post')}}" method="post">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn_form">Entrar</button>
                  <a href="{{route('cadastrar')}}" class="btn btn_form">Cadastre-se</a>
                </div>
              </form>
            
            
        </div>
    </div>
</div>
      
            



</body>

</html>