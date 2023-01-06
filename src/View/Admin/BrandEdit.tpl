{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <div class="container">

        <form action='/admin/marca/editar?id={$marca.marca_id}' method="POST" enctype="multipart/form-data">
            <div class="form-group row d-flex justify-content-center">

                <div class="col-lg-6 col-12">

                    <div class="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" value="{$marca.marca_name}" placeholder="Nome da marca" name="marca_name" id="marca_name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                

                    <div class="col-12 mt-3">
                        <div class="d-flex justify-content-center mb-2">
                            <img src="./../../assets/guest/img/uploads/brand/{$marca.marca_src}" style="width: 300px; height: 300px; object-fit: cover;" alt=""> 
                        </div>
                        <div class="p-2" style="border: 1px solid #ced4da; border-radius: 0.25rem;">
                            <label for="picCar">Imagem do carro:</label>
                            <input type="file" id="file" class="ms-2 form-control-file" name="picBrand" accept="image/*" class="form-control">
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">
                    Alterar
                </button>
            </div>

        </form>

    </div>

{/block}