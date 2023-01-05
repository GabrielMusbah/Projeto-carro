{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">

        <a href="/admin/carro/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Id</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Preço</th>
                        <th class="text-center" scope="col">Marca</th>
                        <th class="text-end" scope="col">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $itens as $item}
                        {if $item.carro_trash == false}
                            <tr>
                                <th class="text-center" scope="row">{$item.carro_id}</th>
                                <td class="text-center">{$item.carro_name}</td>
                                <td class="text-center">${$item.price|number_format:2:',':'.'}</td>
                                <td class="text-center">{$item.marca_name}</td>
                                <td class="d-flex justify-content-end">
                                    <span class="" style="white-space: nowrap;">
                                        <a href="/admin/carro/edita?id={$item.carro_id}" class="btn btn-warning btn-sm me-2">
                                            Alterar
                                        </a>
                                        <a href="/admin/carro/deletar?id={$item.carro_id}" class='btn btn-danger btn-sm'>
                                            Excluir
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        {/if}
                    {/foreach}
                </tbody>
            </table>
        </div>
        


    </main>

{/block}