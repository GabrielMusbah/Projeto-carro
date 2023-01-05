{extends file="Template/TemplateGuestSale.tpl"}

{block name=main}
    <div class="container p-4">
                    
        <div class="row">
            
            <div class="col-12 px-4">
                
                <div class="row justify-content-center">

                    <div class="col-12 row">
                        <img src="./assets/guest/img/uploads/brand/{$car.marca_src}" style="width: 80px;" class="img col-6" alt>
                        <h3 class="text-white col-6 mb-0 d-flex align-self-center">{$car.carro_name}</h3>
                    </div>
                    
                </div>

            </div>

            <div class="col-sm-12 col-lg-6">
                
                <div class="p-4">
                    <img src="./assets/guest/img/uploads/car/{$car.carro_src}" class="img-fluid" alt="img-carro" style="height: 450px; width: 500px;">
                </div>

                <div class="p-4 pt-0">
                    <p class="text-white text-justify">
                        {$car.description}
                    </p>
                </div>

            </div>

            <div class="col-sm-12 col-lg-6 p-4">
                
                <div class="mb-4" style="height: 200px;">
                    <h4 class="text-center text-white pb-2 m-0">Vehicle Stats</h4>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-lg-8">
                        
                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Top Speed
                                </p>
                                <p class="col-8 mb-0 text-end">
                                    {for $foo=1 to $car.top_speed}
                                        <i class="text-white fas fa-square p-2 "></i>
                                    {/for}
                                    {for $foo=1 to 5 - $car.top_speed}
                                        <i class="text-white far fa-square p-2 "></i>
                                    {/for}
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Acceleration
                                </p>
                                <p class="col-8 mb-0 text-end">
                                {for $foo=1 to $car.acceleration}
                                    <i class="text-white fas fa-square p-2 "></i>
                                {/for}
                                {for $foo=1 to 5 - $car.acceleration}
                                    <i class="text-white far fa-square p-2 "></i>
                                {/for}
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Braking
                                </p>
                                <p class="col-8 mb-0 text-end">
                                {for $foo=1 to $car.braking}
                                    <i class="text-white fas fa-square p-2 "></i>
                                {/for}
                                {for $foo=1 to 5 - $car.braking}
                                    <i class="text-white far fa-square p-2 "></i>
                                {/for}
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Traction
                                </p>
                                <p class="col-8 mb-0 text-end">
                                {for $foo=1 to $car.traction}
                                    <i class="text-white fas fa-square p-2 "></i>
                                {/for}
                                {for $foo=1 to 5 - $car.traction}
                                    <i class="text-white far fa-square p-2 "></i>
                                {/for}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <form  method="POST" action="/comprar?id={$car.carro_id}">
                        <h4 class="text-center text-white pb-2 m-0">Select from available colors to order</h4>

                        <div class="row justify-content-center" style="height: 200px;">

                            <div class="col-sm-12 col-lg-8">

                                <div class="row justify-content-evenly">

                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-secondary" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="cinza" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-info" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="azul claro" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-light" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="branco" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-dark" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="preto" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input bg-primary" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="azul" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input bg-danger" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="vermelho" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input bg-warning" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="amarelo" required>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input" style="height: 40px; width: 40px; background-color: green" type="radio" name="color" id="color" value="verde" required>
                                    </div>
                                
                                </div>

                            </div>

                        </div>

                    
                            
                        <div class="row justify-content-center mt-3">
                            <p class="col-sm-12 col-xl-4 text-center text-xl-start text-money mb-0" >
                                R$ {$car.price|number_format:2:',':'.'}
                            </p>
                            <div class="col-sm-12 col-xl-4 d-flex justify-content-center">
                                <button class="button-red-white" style="height: 100%; width: 100%; max-width: 200px">
                                    ORDER
                                </button>
                            </div>
                        </div>
                </form>
            </div>

        </div>

    </div>
{/block}
