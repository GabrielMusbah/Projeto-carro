{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <div class="container">

        <form method="POST" action="/admin/compra/editar?id={$compra.compra_id}">
            <div class="form-group row">

                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Comprador</span>
                        <input type="text" class="form-control" placeholder="Comprador" aria-label="Username" aria-describedby="basic-addon1" value="{$compra.usuario_name}" name="usuario_name" id="usuario_name" required>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Carro</span>
                        <input type="text" class="form-control" placeholder="Carro" aria-label="Username" aria-describedby="basic-addon1" value="{$compra.carro_name}" name="carro_name" id="carro_name" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Preço</span>
                        <input type="text" class="form-control" placeholder="Preco" aria-label="Username" aria-describedby="basic-addon1" value="{$compra.compra_price}" name="compra_price" id="compra_price" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group mb-0">
                        <label class="input-group-text" for="color">Cor</label>
                        <select class="form-select" name="color" id="color" required>
                            <option {if $compra.color == 'cinza'} selected {/if} value="cinza">Cinza</option>
                            <option {if $compra.color == 'azul claro'} selected {/if} value="azul claro">Azul Claro</option>
                            <option {if $compra.color == 'branco'} selected {/if} value="branco">Branco</option>
                            <option {if $compra.color == 'preto'} selected {/if} value="preto">Preto</option>
                            <option {if $compra.color == 'azul'} selected {/if} value="azul">Azul</option>
                            <option {if $compra.color == 'vermelho'} selected {/if} value="vermelho">Vermelho</option>
                            <option {if $compra.color == 'amarelo'} selected {/if} value="amarelo">Amarelo</option>
                            <option {if $compra.color == 'verde'} selected {/if} value="verde">Verde</option>
                        </select> 
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mt-3">
                        Salvar
                    </button>
                </div>

            </div>

        </form>

    </div>

{/block}