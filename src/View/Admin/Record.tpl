{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0 mt-5">

        <form action='/admin/relatorio/filtrado' method="POST">
            <div class="form-group row">

                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="carro_id">Carro</label>
                        <select class="form-select" id="carro_id" name="carro_id" required>
                        {foreach $carros as $carro}
                            <option {* {if $carro.marca_id == $marca.marca_id} selected {/if} *} value="{$carro.carro_id}">{$carro.carro_name}</option>
                        {/foreach}
                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="usuario_id">Usuario</label>
                        <select class="form-select" id="usuario_id" name="usuario_id" required>
                        {foreach $usuarios as $usuario}
                            <option {*{if $carro.marca_id == $marca.marca_id} selected {/if}*} value="{$usuario.usuario_id}">{$usuario.usuario_name}</option>
                        {/foreach}
                        </select>
                    </div>
                </div>

                <h4 class="text-center">Valor entre:</h4>

                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Incial</span>
                        <input type="text" class="form-control" placeholder="Digite o preço incial" id="price_start" name="price_start"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Final</span>
                        <input type="text" class="form-control" placeholder="Digite o preço final" id="price_end" name="price_end"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-3">
                    Filtrar
                </button>
            </div>
        </form>

    </main>

{/block}