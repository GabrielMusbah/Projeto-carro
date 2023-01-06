{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0 mt-5">

        {if empty($itens)}
            <div class="mt-4">
                <h1 class="text-center p-3 mb-0">Ops, nada foi encontrado</h1>
                <p class="text-center p-2 pt-0 mb-0">A sua filtragem não retornou nenhuma compra, provavelmente não temos informações do banco da dados.</p>
            </div>
        {else}

        
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Comprador</th>
                            <th class="text-center" scope="col">Carro</th>
                            <th class="text-center" scope="col">Cor</th>
                            <th class="text-center" scope="col">Preço</th>
                            <th class="text-end" scope="col">Menu</th>
                        </tr>
                    </thead>

                    <tbody>
                        {foreach $itens as $item}
                            {* {if $item.compra_trash == false} *}
                                <tr>
                                    <th class="text-center" scope="row">{$item.compra_id}</th>
                                    <td class="text-center">{$item.usuario_name}</td>
                                    <td class="text-center">{$item.carro_name}</td>
                                    <td class="text-center">{$item.color}</td>
                                    <td class="text-center">R$ {$item.compra_price|number_format:2:',':'.'}</td>
                                    <td class="d-flex justify-content-end" style="white-space: nowrap;">
                                        <span class="">
                                            <a href="/admin/compra/edita?id={$item.compra_id}" class="btn btn-warning btn-sm me-2">
                                                Alterar
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            {* {/if} *}
                        {/foreach}
                    </tbody>
                </table>
            
            </div>

        {/if}


    </main>

{/block}