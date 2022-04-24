@extends('layout.layout')

@section('home')

    <body class="bg-main">
        @include('cabecario')

        <div class="container-fluid">
            <div class="row espacocarrocel">
                <div class="col-12">
                    <div class="ver_evento">

                        <img src="../resources/images/noite_ev.jpg" class="d-block w-100  img_ver_evento" alt="...">
                    </div>
                </div>

                <div class="col-12">
                    

                    <div class="ver_evento bg-transparente mb-3">
                        <div class="corpo_evento">

                        
                    <h1 >Festival do cupu</h1>

                    <h5 >Carrasco bonito do tocantins - TO</h5>

                    <p id="dia"><strong>Dia 07/09 sexta à 15/09 Sabado</strong> </p> 
                    
                        <p class="">descriçao: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas molestiae consectetur error, laboriosam architecto doloribus ad commodi repudiandae
                            consequuntur totam quas tempore reiciendis, blanditiis, delectus autem temporibus dolor
                            molestias. Eos.</p>
                            <div class="info">
                                <span><i class="fa-solid fa-person-dress"></i> Entrada Mulher: <strong id="entrada">10,00 R$</strong></span>
                                <br>
                                <span><i class="fa-solid fa-person"></i> Entrada Homen: <strong id="entrada">20,00 R$</strong></span> <br>
                                <span><i class="fa-solid fa-location-dot"></i> Local: <strong>Parque de exposiçao</strong> </span> <br>
                                <span><i class="fa-solid fa-clock"></i> Horario: <strong>23:00 as 04:00 </strong> </span>
                                <p>970 pessoas confirmaram presença</p>
                                
                                
                              </div>
                             
                                <p class=""><a href="" class="btn  ">Voltar</a> <a href=""
                                    class="btn btn-c">Presença confirmada <i class="fa-solid fa-circle-check"></i></a>
                              
                   
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ver_evento">
                        <div class="corpo_evento">
                            <img src="../resources/images/logo3.jpg" alt="" class="img_perfil">
                            <span class="nome">jhon Lennon Silva</span><br>
                            
                        <textarea class="form-control mt-1" placeholder="Faça um comentário." name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <span><a href="" class="btn  mt-2">comentar</a></span><span class="n-comentarios">934 comentários</span><hr>
                            

                        </div>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <div class="ver_evento">
                        <div class="corpo_evento">
                                <img src="../resources/images/m.jpg" alt="" class="img_perfil">
                                <span class="nome">Leticia Lima</span>
                                <div class="seta"></div>
                                
                            <p class="comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facilis mollitia reprehenderit modi itaque dicta ea pariatur nobis. Officia sunt quibusdam
                                 dolores consectetur aliquam, perferendis possimus eaque accusamus pariatur inventore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <div class="ver_evento">
                        <div class="corpo_evento">
                                <img src="../resources/images/jhon2.jpg" alt="" class="img_perfil">
                                <span class="nome">Lennon Carvalho</span>
                                <div class="seta"></div>
                                
                            <p class="comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facilis mollitia reprehenderit modi itaque dicta ea pariatur nobis. Officia sunt quibusdam
                                 dolores consectetur aliquam, perferendis possimus eaque accusamus pariatur inventore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <div class="ver_evento">
                        <div class="corpo_evento">
                                <img src="../resources/images/jhon.jpg" alt="" class="img_perfil">
                                <span class="nome"> Jhon Siva</span>
                                <div class="seta"></div>
                                
                            <p class="comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facilis mollitia reprehenderit modi itaque dicta ea pariatur nobis. Officia sunt quibusdam
                                 dolores consectetur aliquam, perferendis possimus eaque accusamus pariatur inventore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
