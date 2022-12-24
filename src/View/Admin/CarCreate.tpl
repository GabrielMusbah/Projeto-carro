{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">

        <form action='/admin/carro/criar' method="POST">
            <div class="form-group row">

                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Digite o nome" id="name" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" id="price" name="price"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="marca_id">Marca</label>
                        <select class="form-select" id="marca_id" name="marca_id" required>
                        {foreach $marcas as $marca}
                            <option value="{$marca.marca_id}">{$marca.name}</option>
                        {/foreach}
                        </select>
                    </div>
                </div>

                <div class="col-3">
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

                <div class="col-3">
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

                <div class="col-3">
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

                <div class="col-3">
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

            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-3">
                    Salvar
                </button>
            </div>
        </form>



    </main>

{/block}