{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <div class="container">

        <form action='/admin/carro/editar?id={$carro.carro_id}' method="POST" enctype="multipart/form-data">
            <div class="form-group row">

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Digite o nome" value="{$carro.carro_name}" id="carro_name" name="carro_name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" value="{$carro.price}" id="price" name="price"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="marca_id">Marca</label>
                        <select class="form-select" id="marca_id" name="marca_id" required>
                        {foreach $marcas as $marca}
                            <option {if $carro.marca_id == $marca.marca_id} selected {/if} value="{$marca.marca_id}">{$marca.marca_name}</option>
                        {/foreach}
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Lugares</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" value="{$carro.seat}" id="seat" name="seat"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="top_speed">Top Speed</label>
                        <select class="form-select" id="top_speed" name="top_speed" required>
                        <option {if $carro.top_speed == 1} selected {/if} value="1">1</option>
                        <option {if $carro.top_speed == 2} selected {/if} value="2">2</option>
                        <option {if $carro.top_speed == 3} selected {/if} value="3">3</option>
                        <option {if $carro.top_speed == 4} selected {/if} value="4">4</option>
                        <option {if $carro.top_speed == 5} selected {/if} value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="acceleration">Acceleration</label>
                        <select class="form-select" id="acceleration" name="acceleration" required>
                        <option {if $carro.acceleration == 1} selected {/if} value="1">1</option>
                        <option {if $carro.acceleration == 2} selected {/if} value="2">2</option>
                        <option {if $carro.acceleration == 3} selected {/if} value="3">3</option>
                        <option {if $carro.acceleration == 4} selected {/if} value="4">4</option>
                        <option {if $carro.acceleration == 5} selected {/if} value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="braking">Braking</label>
                        <select class="form-select" id="braking" name="braking" required>
                        <option {if $carro.braking == 1} selected {/if} value="1">1</option>
                        <option {if $carro.braking == 2} selected {/if} value="2">2</option>
                        <option {if $carro.braking == 3} selected {/if} value="3">3</option>
                        <option {if $carro.braking == 4} selected {/if} value="4">4</option>
                        <option {if $carro.braking == 5} selected {/if} value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="traction">Traction</label>
                        <select class="form-select" id="traction" name="traction" required>
                        <option {if $carro.traction == 1} selected {/if} value="1">1</option>
                        <option {if $carro.traction == 2} selected {/if} value="2">2</option>
                        <option {if $carro.traction == 3} selected {/if} value="3">3</option>
                        <option {if $carro.traction == 4} selected {/if} value="4">4</option>
                        <option {if $carro.traction == 5} selected {/if} value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">  
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Descreva o veiculo" id="description" name="description" required>{$carro.description}</textarea>
                        <label for="description">Descricao</label>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-3  d-flex">
                    <div class="p-2" style="border: 1px solid #ced4da; border-radius: 0.25rem;">
                        <label for="picCar">Imagem do carro:</label>
                        <input type="file" id="file" class="ms-2 form-control-file" name="picCar" accept="image/*" class="form-control">
                    </div>
                </div>

            </div>
            
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-3">
                    Salvar
                </button>
            </div>

        </form>



    </div>

{/block}