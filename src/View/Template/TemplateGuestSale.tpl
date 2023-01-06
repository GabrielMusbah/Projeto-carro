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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                {if !empty($imgs)}
                    <div class="col-12 row d-flex justify-content-around p-3 pb-1 owl-carousel owl-theme">

                        {foreach $imgs as $img}

                            <div class="item d-flex justify-content-center">
                                <img src="./assets/guest/img/uploads/brand/{$img.marca_src}" style="width: 50px;" alt="">
                            </div>

                        {/foreach}

                    </div>
                {/if}
                <h3 class="text-center p-2 m-0 text-white col-12">© 2022 Musbah Saleh</h3>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/guest/js/carousel.js"></script>
    <script src="./assets/guest/js/filter.js"></script>
</body>
</html>