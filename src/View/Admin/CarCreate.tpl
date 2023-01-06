{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <div class="container">

        <form action='/admin/carro/criar' method="POST" enctype="multipart/form-data">
            <div class="form-group row">

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Digite o nome" id="carro_name" name="carro_name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" id="price" name="price"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="marca_id">Marca</label>
                        <select class="form-select" id="marca_id" name="marca_id" required>
                        {foreach $marcas as $marca}
                            <option value="{$marca.marca_id}">{$marca.marca_name}</option>
                        {/foreach}
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Lugares</span>
                        <input type="text" class="form-control" placeholder="Digite o numero de lugares" id="seat" name="seat"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="top_speed">Top Speed</label>
                        <select class="form-select" id="top_speed" name="top_speed" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="acceleration">Acceleration</label>
                        <select class="form-select" id="acceleration" name="acceleration" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="braking">Braking</label>
                        <select class="form-select" id="braking" name="braking" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="traction">Traction</label>
                        <select class="form-select" id="traction" name="traction" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">  
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Descreva o veiculo" id="description" name="description" required></textarea>
                        <label for="description">Descricao</label>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-3  d-flex">
                    <div class="p-2" style="border: 1px solid #ced4da; border-radius: 0.25rem;">
                        <label for="picCar">Imagem do carro:</label>
                        <input type="file" id="file" class="ms-2 form-control-file" name="picCar" accept="image/*" class="form-control" required>
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