{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">

        <a href="/admin/usuario/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>
        <ul class="list-group">
            {foreach $itens as $item}
                <li class="list-group-item d-flex justify-content-between">
                    {$item.name}
                    <span>
                        <a href="/admin/historico" class="btn btn-info btn-sm me-2">
                            Compras
                        </a>
                        <a href="/admin/usuario/edita" class="btn btn-warning btn-sm me-2">
                            Alterar
                        </a>
                        <a href="#" class='btn btn-danger btn-sm'>
                            Excluir
                        </a>
                    </span>
                </li>
            {/foreach}
        </ul>

    </main>

{/block}