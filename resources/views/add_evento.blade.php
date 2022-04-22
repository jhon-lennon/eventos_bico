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
          
                <form action="{{route('post')}}" method="post">
                 @csrf

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                    <input type="email" class="form-control" name="titulo" id="exampleFormControlInput1" placeholder="Nome do evento">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Local</label>
                    <input type="email" class="form-control" name="local" id="exampleFormControlInput1" placeholder="nome do clube/praça/">
                  </div>
                
                 
                 
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                        <select class="form-select" name="cidade" aria-label="Default select example">
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
                      <div class="col-6">
                          <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                          <input type="text" class="form-control"  name="endereco" id="exampleFormControlInput1" placeholder="rua/numero/">
                      </div>
                    
                       <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Data inicio:</label>
                       <input class="form-control" name="data_inicio" type="date">
                       
                    </div>
                    
                    <div class="col-6">
                       <label for="exampleFormControlInput1" class="form-label">Hora inicio:</label>
                       <input class="form-control" name="hora_inicio" type="time">
                    </div>
                    <div class="col-6">
                      <label for="exampleFormControlInput1" class="form-label">Data final:</label>
                     <input class="form-control" name="data_final" type="date">
                     
                  </div>
                  
                  <div class="col-6">
                     <label for="exampleFormControlInput1" class="form-label">Hora final:</label>
                     <input class="form-control" name="hora_final" type="time">
                  </div>
                  </div>
                      <label for="exampleFormControlInput1" class="form-label">Imagem</label>
                      <input type="file" class="form-control" name="imagem" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                       
                    
                  </div>
                  <div class="row" >
                  <div class="col-4">
                      <div class="form-check form_preco">
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked onclick="valor_entrada()">
                    <label class="form-check-label " for="flexRadioDefault1">
                     Evento Gratis
                    </label>
                  </div>
                  <div class="form-check form_preco">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  onclick="valor_entrada()">
                    <label class="form-check-label" for="flexRadioDefault2" >
                      Evento Pago
                    </label>
                  </div>
                  </div>
                
                  <div class="col-4 " id="preco_homem">
                   
                     </div>

                      <div class="col-4 "  id="preco_mulher">
                        
                  </div>
                

                </div>
                
                  <hr>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descriçao</label>
                    <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn_form">Adicionar</button>
                  <button class="btn btn_form">Cancelar</button>

                    </div>
                    
                      
              </form>
           </div>
        </div>
        </div>
    
      
            


<script>

    var entrada = document.getElementById('flexRadioDefault2')
    var preco_homem = document.getElementById('preco_homem')
    var preco_mulher = document.getElementById('preco_mulher')

  console.log(entrada.checked)
  function valor_entrada(){
    console.log(entrada.checked)
    if(entrada.checked == true){
    preco_homem.innerHTML = '<label for="exampleFormControlInput1" class="form-label">Homem</label><input class="form-control" name="preco_homem" type="number" value="00.00">'
    preco_mulher.innerHTML = '<label for="exampleFormControlInput1" class="form-label">Mulher</label><input class="form-control" name="preco_mulher" type="number" value="00.00">'
}else{
  preco_homem.innerHTML = ''
  preco_mulher.innerHTML = ''
}
}
</script>
</body>

</html>

