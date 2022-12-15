{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">
    <a href="#" class="btn btn-primary mb-3">Criar {$itemEdit}</a>

        <div>

            {foreach $list as $item}

                <div class="d-flex justify-content-between border border-black p-2">
                    <p>
                        Jose
                    </p>
                    <div>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <a href="#" class="btn btn-danger">Excluir</a>
                    </div>
                </div>
            
            {/foreach}

        </div>
    </main>

{/block}