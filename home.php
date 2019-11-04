<?php 
    include('./includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/home.css">
    <title>Home</title>
</head>
<body>
    <main>
        <section class="home">
            <section class="banner">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./assets/img/banner3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/banner2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/banner1.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                        
                </div>
            </section>

            <div class="over-hit">
                <div class="titulo">
                    <h2>Queremos viver momentos memoráveis com você!<br><br> <strong>Bora viajar juntos?</strong></h2>
                </div>
                <div>
                    <button class="btn-cadastro"> <a href="cadastro.php">Cadastrese</a> </button>
                </div>
            </div>
            
            
            <!-- icons -->
            <section class="icons">
                <div class="container container-ico">
                    <div class="ico">
                        <div class="subtitulo">
                            <h3>Saiba porque sua viagem comença aqui<br></h3>
                        </div> 
                        <div>
                            <img src="./assets/img/icon-comunidade.png" alt="">
                        </div>
                        <div class="subtitulo">
                            <p>Criar um perfil com seus interesses de viagem e compartilhe experiencias com a nossa comunidade.</p>
                        </div>
                        
                    </div> 
                    <div class="ico">
                        <div>
                            <img src="./assets/img/icon-comunidade.png" alt="">
                        </div>
                        <div class="subtitulo">
                            <p>Encontre os destinos de seu interesse com as melhores oportunidades oferecidas pelos nossos parceiros.</p>
                        </div>
                        
                    </div> 
                    <div class="ico">
                        <div>
                            <img src="./assets/img/icon-comunidade.png" alt="">
                        </div>
                        <div class="subtitulo">
                            <p>Crie, organize ou participe de grupos de viagem com amigos, familiares ou ainda conheça uma galera totalmente nova e compatível com seus interesses.</p>
                        </div>
                        
                    </div> 
                    <div class="ico">
                        <div>
                            <img src="./assets/img/icon-comunidade.png" alt="">
                        </div>
                        <div class="subtitulo">
                            <p>você tambén pode traçar metas, compartilhar suas conquistas e receber benefícios exclusivos.</p>
                        </div>
                        
                    </div> 
                    
                </div>

            </section>

            <!-- grupos mais populares -->
            <section class="grupos-populares">
                
                <div class="subtitulo">
                    <h3>Grupos mais populares<br></h3>
                </div> 
                <div class="subtitulo">
                    <p>Aqui você pode encontrar e ser encontrada pelas comunidades certas e curtir sua viagem dos sonhos!.</p>
                </div>
                       

            </section>
        </section>

    </main>
   
   

       
       



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>