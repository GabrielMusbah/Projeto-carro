{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <main class="container p-0">

        <form action='/admin/marca/editar?id={$marca.marca_id}' method="POST" enctype="multipart/form-data">
            <div class="form-group row d-flex justify-content-center">

                <div class="col-6">

                    <div class="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" value="{$marca.marca_name}" placeholder="Username" name="marca_name" id="marca_name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                
                    {* <div class="">
                        <input type="file" id="file" class="form-control-file" name="pic" accept=".png" class="form-control" required>
                    </div> *}
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">
                    Alterar
                </button>
            </div>

        </form>

    </main>

{/block}