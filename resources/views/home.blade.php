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

<body>

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
            <a class="nav-link" href="{{route('cadastrar')}}">Cadstrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cadastrar')}}">Cadstrar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cidades
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Araguatins</a></li>
              <li><a class="dropdown-item" href="#">Augustinopolis</a></li>
              <li><a class="dropdown-item" href="#">Axixá</a></li>
              <li><a class="dropdown-item" href="#">Butiri do Tocantins</a></li>
              <li><a class="dropdown-item" href="#">Esperantina</a></li>
              <li><a class="dropdown-item" href="#">Carrasco bonito</a></li>
              <li><a class="dropdown-item" href="#">São sebastião</a></li>
              <li><a class="dropdown-item" href="#">Araguatins</a></li>
              <li><a class="dropdown-item" href="#">Augustinopolis</a></li>
              <li><a class="dropdown-item" href="#">Axixá</a></li>
              <li><a class="dropdown-item" href="#">Butiri do Tocantins</a></li>
              <li><a class="dropdown-item" href="#">Esperantina</a></li>
              <li><a class="dropdown-item" href="#">Carrasco bonito</a></li>
              <li><a class="dropdown-item" href="#">São sebastião</a></li>
              <li><a class="dropdown-item" href="#">Araguatins</a></li>
              <li><a class="dropdown-item" href="#">Augustinopolis</a></li>
              <li><a class="dropdown-item" href="#">Axixá</a></li>
              <li><a class="dropdown-item" href="#">Butiri do Tocantins</a></li>
              <li><a class="dropdown-item" href="#">Esperantina</a></li>
              <li><a class="dropdown-item" href="#">Carrasco bonito</a></li>
              <li><a class="dropdown-item" href="#">São sebastião</a></li>

            </ul>
          </li>
          <li class="nav-item">

    <a href="" class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Cidades</a>

          </li>
         </ul>
              <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cidade ou evento" aria-label="Search">
            <button class="btn btn_form" type="submit">Buscar</button>
          </form>
        
     

      </div>
    </div>
  </nav>





  <div class="container-fluid espacocarrocel">
    <div class="row">

<div class="col-12 my-5">
  <div class="carcad">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../resources/images/noite_ev.jpg" class="d-block w-100 carrocel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../resources/images/festa_do_cupu.jpg" class="d-block w-100 carrocel" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../resources/images/festa_do_peixe.jpg" class="d-block w-100 carrocel" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</div>
</div>

  </nav>

<div class="row">
  <div class="col-12">
    <nav class="navbar navbar-expand-md navbar-light ">
        <div class="container-fluid">
            <a href="" class="btn me-1 ">Esta semana</a>
         
          <a href="" class="btn me-1 ">Este mes</a>
          <button class=" btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" >
           mais filtros
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="btn me-1 my-1 ">desta semana</a>
                  </li>
           
              <li class="nav-item">
                <a href="" class="btn me-1 my-1 ">desta semana</a>
              </li>
              <li class="nav-item">
                <a href="" class="btn me-1 my-1 ">deste mês</a> 
              </li>
              <li class="nav-item">
                <a href="" class="btn me-1 my-1 ">aberto ao publico</a> 
              </li>
            </ul>
          </div>
        </div>
   
  </div>














<div class="col-12">
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="dropdown-menu">
      <li><a class="dropdown-item"  href="{{route('home')}}">Araguatins</a></li>
      <li><a class="dropdown-item" href="#">Augustinopolis</a></li>
      <li><a class="dropdown-item" href="#">Axixá</a></li>
      <li><a class="dropdown-item" href="#">Butiri do Tocantins</a></li>
      <li><a class="dropdown-item" href="#">Esperantina</a></li>
      <li><a class="dropdown-item" href="#">Carrasco bonito</a></li>
      <li><a class="dropdown-item" href="#">São sebastião</a></li>
      <li><a class="dropdown-item" href="#">Araguatins</a></li>
      <li><a class="dropdown-item" href="#">Augustinopolis</a></li>
      <li><a class="dropdown-item" href="#">Axixá</a></li>
      <li><a class="dropdown-item" href="#">Butiri do Tocantins</a></li>
      <li><a class="dropdown-item" href="#">Esperantina</a></li>
      <li><a class="dropdown-item" href="#">Carrasco bonito</a></li>
      <li><a class="dropdown-item" href="#">São sebastião</a></li>
      <li><a class="dropdown-item" href="#">Araguatins</a></li>
      <li><a class="dropdown-item" href="#">Augustinopolis</a></li>
      <li><a class="dropdown-item" href="#">Axixá</a></li>
      <li><a class="dropdown-item" href="#">Butiri do Tocantins</a></li>
      <li><a class="dropdown-item" href="#">Esperantina</a></li>
      <li><a class="dropdown-item" href="#">Carrasco bonito</a></li>
      <li><a class="dropdown-item" href="#">São sebastião</a></li>

    </ul>
    
  </div>
</div>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
</div>













  
  <div class="col my-3">

    <div class="card shadow" style="width: 18rem;">
      <img src="../resources/images/chambari.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Festival do chambarí</h5>
        <span id="dia"><strong>Dia 30/09 Sabado | Paraiso-TO</strong> </span>

        <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
        <div class="info">
          <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
          <br>
          <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
          <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
          <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

        </div>


      </div>
      <div class="foote-card">
        <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
            class="btn btn-conf">Confirmar presença</a>
      </div>
    </div>
  </div>
  <div class="col my-3">

    <div class="card shadow" style="width: 18rem;">
      <img src="../resources/images/expoatins.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">XIX Expoatins</h5>
        <span id="dia"><strong>Dia 07/09 sexta à 15/09 Sabado</strong> </span><br>
        <span id="dia"><strong>Carrasco bonito do tocantins-TO</strong> </span>

        <p class="card-text">A maior exposição </p>
        <div class="info">
          <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">10,00 R$</strong></span>
          <br>
          <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
          <span><i class="fa-solid fa-location-dot"></i> Local: <strong>Parque de exposiçao</strong> </span> <br>
          <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 as 04:00 </strong> </span>

        </div>


      </div>
      <div class="foote-card">
        <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
            class="btn btn-c  btn-conf">Presença confirmada <i class="fa-solid fa-circle-check"></i></a>
      </div>
    </div>
  </div>
      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/festa_do_cupu.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Festa do cupu</h5>
            <span id="dia"><strong>Dia 16/05 Quinta | Esperantina-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>

      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/festa_do_peixe.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Festa do Peixe</h5>
            <span id="dia"><strong>Dia 23/05 Quinta| São Sebastioão-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">Gratis</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>
      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/Eventos.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sexta Do Mellody</h5>
            <span id="dia"><strong>Dia 23/05 sexta | Araguatins-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>
      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/gdkombi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sexta Do Mellody</h5>
            <span id="dia"><strong>Dia 23/05 sexta | Araguatins-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>

      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/gdkombi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sexta Do Mellody</h5>
            <span id="dia"><strong>Dia 23/05 sexta | Araguatins-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>
      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/gdkombi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sexta Do Mellody</h5>
            <span id="dia"><strong>Dia 23/05 sexta | Araguatins-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>

      <div class="col my-3">

        <div class="card shadow" style="width: 18rem;">
          <img src="../resources/images/gdkombi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sexta Do Mellody</h5>
            <span id="dia"><strong>Dia 23/05 sexta | Araguatins-TO</strong> </span>

            <p class="card-text">Na AAbb de Araguatins dj Jhon tocando os melhores tecnomelo...</p>
            <div class="info">
              <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">Gratis</strong></span>
              <br>
              <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
              <span><i class="fa-solid fa-location-dot"></i> Local: <strong>AABB</strong> </span> <br>
              <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 h</strong> </span>

            </div>


          </div>
          <div class="foote-card">
            <p class="mt-3 ma-5 pfooter"><a href="" class="btn  ">Ver evento</a> <a href=""
                class="btn btn-conf">Confirmar presença</a>
          </div>
        </div>
      </div>




    </div>

  </div>



</body>

</html>