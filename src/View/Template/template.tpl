<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" type="imagem/png" href="/img/icon.png" />
    <title>Legendary Motor Sport</title>
</head>
<body>

    <header class="border-header">
        <div class="container mb-4">
            <div class="row px-1">
                <div class="col-sm-12 col-md-6 col-lg-4 p-4">
                    <img class="img-fluid" src="img/legendary-logo.png" alt="">
                    <p class="text-red text-shadow text-center m-0">
                        CONFIRA NOSSOS CARROS TOPO DE LINHA
                    </p>
                    <P class="text-white text-shadow text-center m-0">
                        ALTO DESEMPENHO POR PREÇOS INCRÍVEIS
                    </P>
                </div>
            </div>
        </div>
    </header>

    <main class="container bg-main border-main m-main">

    {{block name=main}
        
    {/block}}

    </main>

    <footer class="bg-preto border-top-red mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 row d-flex justify-content-around p-3">
                    <img src="img/icon/IconFerrari.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconLamborghini.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconMazda.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconBmw.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconMercedes.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconMaserati.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconJeep.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconVolvo.png" style="width: 100px;" alt="">
                    <img src="img/icon/IconToyota.png" style="width: 100px;" alt="">
                </div>
                <h3 class="text-center p-2 pt-0 m-0 text-white col-12">© 2022 Musbah Saleh</h3>
            </div>
        </div>
    </footer>


    <template id="template_card">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-preto">
                <div class="card-header text-white p-0">
                    <div class="p-3 d-flex justify-content-end">
                        <p class=" mb-0 position-relative ">
                            <i class="fas fa-user-alt p-2"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark template-card-seat">
                                
                            </span>
                        </p>
                    </div>
                </div>
                <img src="" class="card-img-top px-1 template-card-figure" alt="">
                <div class="card-body text-white">
                    <div class="row px-1">
                        <p class="col-sm-12 col-xl-7 px-0 m-0 text-sm-center text-xl-start pb-sm-2 pb-xl-0 template-card-name">
                            
                        </p>
                        <button class="col-sm-12 col-xl-5 button-red-white py-1 text-white template-card-price" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </template>


    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        
        <div class="modal-dialog" style="max-width: none;">
            
            <div class="modal-content container p-4 bg-modal-container border-modal-container">
                
                <div class="row">
                    
                    <div class="col-12 px-4">
                        
                        <div class="row justify-content-center">

                            <div class="col-6 row">
                                <img src="img/icon/IconFerrari.png" style="width: 80px;" class="img col-6" alt>
                                <h3 class="text-white col-6 mb-0 d-flex align-self-center">FERRARI</h3>
                            </div>
                            
                            <div class="col-6 d-flex justify-content-end">
                                <button type="button" class="border-0 text-white d-flex align-self-center" style="background-color: #52100e;" data-bs-dismiss="modal">
                                    <span class="material-symbols-outlined p-0">close</span>
                                </button>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12 col-lg-6">
                        
                        <div class="p-4">
                            <img src="xevete.jpg" class="img-fluid" alt="img-carro">
                        </div>

                        <div class="p-4 pt-0">
                            <p class="text-white text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi vero quaerat corrupti dignissimos repudiandae quia ipsum nihil, neque fugit iusto quasi beatae ad libero, architecto, porro veniam voluptatem sunt deserunt!
                            </p>
                        </div>

                    </div>

                    <div class="col-sm-12 col-lg-6 p-4">
                        
                        <div class="mb-4">
                            <h4 class="text-center text-white pb-2 m-0">Vehicle Stats</h4>
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-lg-8">
                                   
                                    <div class="row">
                                        <p class="col-4 mb-0 text-white">
                                            Top Speed
                                        </p>
                                        <p class="col-8 mb-0 text-end">
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white far fa-square p-2 "></i>
                                        </p>
                                    </div>

                                    <div class="row">
                                        <p class="col-4 mb-0 text-white">
                                            Acceleration
                                        </p>
                                        <p class="col-8 mb-0 text-end">
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white far fa-square p-2 "></i>
                                        </p>
                                    </div>

                                    <div class="row">
                                        <p class="col-4 mb-0 text-white">
                                            Braking
                                        </p>
                                        <p class="col-8 mb-0 text-end">
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white far fa-square p-2 "></i>
                                        </p>
                                    </div>

                                    <div class="row">
                                        <p class="col-4 mb-0 text-white">
                                            Traction
                                        </p>
                                        <p class="col-8 mb-0 text-end">
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white fas fa-square p-2 "></i>
                                            <i class="text-white far fa-square p-2 "></i>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-center text-white pb-2 m-0">Select from available colors to order</h4>

                            <div class="row justify-content-center">

                                <div class="col-sm-12 col-lg-8">

                                    <div class="row justify-content-evenly">
                                        <input class="form-check-input bg-secondary" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <input class="form-check-input bg-info" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <input class="form-check-input bg-light" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <input class="form-check-input bg-dark" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    </div>

                                    <div  class="row justify-content-evenly">
                                        <button type="button" style="height: 40px; width: 40px;" class="rounded-circle m-3 btn btn-primary"></button>
                                        <button type="button" style="height: 40px; width: 40px;" class="rounded-circle m-3 btn btn-success"></button>
                                        <button type="button" style="height: 40px; width: 40px;" class="rounded-circle m-3 btn btn-danger"></button>
                                        <button type="button" style="height: 40px; width: 40px;" class="rounded-circle m-3 btn btn-warning"></button>
                                    </div>

                                </div>

                            </div>

                        </div>
                            
                        <div class="row justify-content-center ">
                            <p class="col-sm-12 col-xl-4 text-center text-xl-start text-money mb-0" >
                                $ 500.000,00
                            </p>
                            <div class="col-sm-12 col-xl-4 d-flex justify-content-center">
                                <button class="button-red-white" style="height: 100%; width: 100%; max-width: 200px" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#msg_buy_make">
                                    ORDER
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            
            </div>
        
        </div>
    </div>


    <div class="modal fade" id="msg_buy_make" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-border-modal-buy-make  row p-4">
                    <h3 class="text-center mb-3 text-white col-12">Obrigado pela compra.</h3>
                    <p class="text-white col-12 mb-3" style="text-align: justify;">O veiculo comprado vai ser enviado para sua garagem nos proximos minutos, faça um bom uso da sua nova propriedade, qualquer duvida sera um prazer te ajudar</p>
                    <p class="text-white col-8 mb-0 d-flex align-self-center" >Cell: 999 8734 2345</p>
                    <button type="button" data-bs-dismiss="modal" class="button-red-white py-2 col-4">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>