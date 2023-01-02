{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">

        {if empty($itens)}
            <div class="mt-4 border">
                <h1 class="text-center p-3 mb-0">Ops, nada foi encontrado</h1>
                <p class="text-justify p-2 pt-0 mb-0">A sua filtragem não retornou nenhuma compra, provavelmente você usou parametros que não correspondem as informações do banco da dados,
                ainda não temos informações salvas.</p>
            </div>
        {else}

            <div class="table-responsive">
            
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Usuario</th>
                            <th class="text-center" scope="col">Carro</th>
                            <th class="text-center" scope="col">Cor</th>
                            <th class="text-center" scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $itens as $item}
                            {if $item.carro_trash == false}
                                <tr>
                                    <th class="text-center" scope="row">{$item.compra_id}</th>
                                    <td class="text-center">{$item.usuario_name}</td>
                                    <td class="text-center">{$item.carro_name}</td>
                                    <td class="text-center">{$item.color}</td>
                                    <td class="text-center">{$item.compra_price}</td>
                                </tr>
                            {/if}
                        {/foreach}
                    </tbody>
                </table>

            </div>

        {/if}

    </main>

{/block}