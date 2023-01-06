{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">

        <a href="/admin/usuario/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>

        {if empty($itens)}
            <div class="mt-4">
                <h1 class="text-center p-3 mb-0">Ops, nada foi encontrado</h1>
                <p class="text-center p-2 pt-0 mb-0">A sua filtragem não retornou nenhum usuario, provavelmente não temos informações do banco da dados.</p>
            </div>
        {else}

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Nome</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Modo</th>
                            <th class="text-end" scope="col">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $itens as $item}
                            {if $item.usuario_trash == false}
                                <tr>
                                    <th class="text-center" scope="row">{$item.usuario_id}</th>
                                    <td class="text-center">{$item.usuario_name}</td>
                                    <td class="text-center">{$item.email}</td>
                                    <td class="text-center">{if $item.adm == 1} Admin {else} Normal {/if}</td>
                                    <td class="d-flex justify-content-end">
                                        <span class="" style="white-space: nowrap;">
                                            {* <a href="/admin/historico?id={$item.usuario_id}" class="btn btn-info btn-sm me-2">
                                                Compras
                                            </a> *}
                                            <a href="/admin/usuario/edita?id={$item.usuario_id}" class="btn btn-warning btn-sm me-2">
                                                Alterar
                                            </a>
                                            <a href="/admin/usuario/deletar?id={$item.usuario_id}" class='btn btn-danger btn-sm'>
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

        {/if}

    </main>

{/block}