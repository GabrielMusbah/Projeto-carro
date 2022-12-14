{extends file="TemplateGuestSale.tpl"}

{block name=main}
    <div class="container p-4">
                    
        <div class="row">
            
            <div class="col-12 px-4">
                
                <div class="row justify-content-center">

                    <div class="col-6 row">
                        <img src="img/icon/IconFerrari.png" style="width: 80px;" class="img col-6" alt>
                        <h3 class="text-white col-6 mb-0 d-flex align-self-center">{$carro.name}</h3>
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
                        {$carro.description}
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
                        {$carro.price}
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
{/block}
