{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}

    <main class="container">
        <div class="row d-flex justify-content-around p-4">

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/user.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Usuarios</h5>
                      <a href="/admin/usuario" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/car.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Carros</h5>
                      <a href="/admin/carro" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/brand.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Marcas</h5>
                      <a href="/admin/marca" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/buy.png" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title text-center">Compras</h5>
                    <a href="/admin/compra" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary pt-2">
                    <img src="./assets/admin/img/historic.png" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title text-center">Relatorio</h5>
                    <a href="/admin/relatorio" class="btn btn-dark d-flex justify-content-center">Visualizar</a>
                    </div>
                </div>
            </div>


        </div>


        </div>
    </main>

{/block}