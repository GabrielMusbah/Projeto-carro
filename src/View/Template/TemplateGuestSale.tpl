<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/guest/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" type="imagem/png" href="./assets/common/img/icon.png"/>
    <title>Legendary Motor Sport - {$title}</title>
</head>
<body>

    <header class="border-header">
        <div class="container mb-4">
            <div class="row px-1">
                <div class="col-sm-12 col-md-6 col-lg-4 p-4">
                    <img class="img-fluid" src="./assets/guest/img/legendary-logo.png" alt="">
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

    {block name=main}
        
    {/block}

    </main>

    <footer class="bg-preto border-top-red mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 row d-flex justify-content-around p-3">
                    <img src="./assets/guest/img/icon/IconFerrari.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconLamborghini.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconMazda.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconBmw.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconMercedes.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconMaserati.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconJeep.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconVolvo.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconToyota.png" style="width: 100px;" alt="">
                </div>
                <h3 class="text-center p-2 pt-0 m-0 text-white col-12">© 2022 Musbah Saleh</h3>
            </div>
        </div>
    </footer>




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
</body>
</html>