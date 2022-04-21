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
        <div class="add_evento mt-2">
            <div>
                <h1 class="text-center h1-login">Adicionar Evento</h1>
            </div>
            <div class="text-center">
                <img src="../resources/images/Eventos.gif" class="img-login" alt="...">
            </div>
          
                <form>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nome do evento">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Local</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome do clube/praça/">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="rua/numero/">
                    
                  </div>
                 
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                    <select class="form-select" aria-label="Default select example">
                      <option value="1">Araguatins</option>
                      <option value="2">Augustinopolis</option>
                      <option value="3">Buriti do Tocantins</option>
                      <option value="4">Araguatins</option>
                      <option value="5">Augustinopolis</option>
                      <option value="6">Buriti do Tocantins</option>
                      <option value="7">Araguatins</option>
                      <option value="8">Augustinopolis</option>
                      <option value="9">Buriti do Tocantins</option>
                      <option value="10">Araguatins</option>
                      <option value="11">Augustinopolis</option>
                      <option value="12">Buriti do Tocantins</option>
                      <option value="13">Araguatins</option>
                      <option value="14">Augustinopolis</option>
                      <option value="15">Buriti do Tocantins</option>
                      <option value="16">Araguatins</option>
                      <option value="17">Augustinopolis</option>
                      <option value="18">Buriti do Tocantins</option>
                      <option value="19">Araguatins</option>
                      <option value="20">Augustinopolis</option>
                      <option value="21">Buriti do Tocantins</option>
                      <option value="22">Araguatins</option>
                      <option value="23">Augustinopolis</option>
                      <option value="24">Buriti do Tocantins</option>
                      <option value="25">Buriti do Tocantins</option>

                    </select>
                  </div>
                  <div class="mb-3">
                    
                      <label for="exampleFormControlInput1" class="form-label">Imagem</label>
                      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                      
                    
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Evento gratis
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Evento pago
                    </label>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descriçao</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
              </form>
            
            
        </div>
    </div>
</div>
      
            



</body>

</html>