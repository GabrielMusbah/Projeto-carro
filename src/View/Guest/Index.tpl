{extends file="Template/TemplateGuestSale.tpl"}

{block name=main}
    <nav class="row d-flex justify-content-between">
        <h3 class="col-sm-12 col-md-6 col-lg-3 py-3 text-white d-flex align-self-center mb-0">
            NOVIDADES
        </h3>
        <div class="col-sm-12 col-md-6 col-lg-3 py-3 d-flex align-self-center">
            <select class="selec form-select form-select-sm text-white" style="background-color: #982a25; " aria-label=".form-select-sm">
                <option value="1">Preço crescente</option>
                <option value="2">Preço decrescente</option>
            </select>
        </div>
    </nav>

    <div class="row card-container">

        {foreach $cars as $car}
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card bg-preto">
                    <div class="card-header text-white p-0">
                        <div class="p-3 d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="./assets/guest/img/uploads/brand/{$car.marca_src}" class="card-img-top px-1" alt="" style="width: 50px; heigth: 50px;">
                                <p class="mb-0 align-self-center">
                                {$car.marca_name}
                                </p>
                            </div>
                            <p class=" mb-0 position-relative align-self-center">
                                <i class="fas fa-user-alt p-2"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                                    {$car.seat}
                                </span>
                            </p>
                        </div>
                    </div>
                    <img src="./assets/guest/img/uploads/car/{$car.carro_src}" class="card-img-top px-1" alt="">
                    <div class="card-body text-white">
                        <div class="row px-1">
                            <p class="col-sm-12 col-xl-7 px-0 m-0 text-sm-center text-xl-start pb-sm-2 pb-xl-0 d-flex align-self-center">
                                {$car.carro_name}
                            </p>

                            <a class="col-sm-12 col-xl-5" href="/compra?id={$car.carro_id}">
                                <button class="button-red-white py-1 text-white" style="width: 100%;">R$ {$car.price|number_format:2:',':'.'}</button>
                            </a>
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}

    </div>
{/block}

