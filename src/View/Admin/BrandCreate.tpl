{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <div class="container">

        <form action='/admin/marca/criar' method="POST" enctype="multipart/form-data">
            <div class="form-group row d-flex justify-content-center">

                <div class="col-6">

                    <div class="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" placeholder="Nome da marca" name="marca_name" id="marca_name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                
                    <div class="mt-3  d-flex">
                        <div class="p-2" style="border: 1px solid #ced4da; border-radius: 0.25rem;">
                            <label for="pic">Imagem da marca:</label>
                            <input type="file" id="pic" class="ms-2 form-control-file" name="pic" accept="image/*" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">
                    Salvar
                </button>
            </div>

        </form>

    </div>

{/block}