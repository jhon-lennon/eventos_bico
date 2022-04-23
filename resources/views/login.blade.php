@extends('layout/layout')

@section('home')
   
    
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
      
            
@endsection