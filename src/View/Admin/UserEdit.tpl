{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}
    <div class="container">

        <form method="POST" action="/admin/usuario/editar?id={$usuario.usuario_id}">
            <div class="form-group row">

                <div class="col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" value="{$usuario.usuario_name}" name="usuario_name" id="usuario_name" required>
                    </div>
                </div>
                
                <div class="col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="{$usuario.email}" name="email" id="email" required>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Senha</span>
                        <input type="text" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1" name="password" id="password" required>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="input-group mb-0">
                        <label class="input-group-text" for="adm">Modo</label>
                        <select class="form-select" name="adm" id="adm" required>
                            <option {if $usuario.adm == true} selected {/if} value="true">Admin</option>
                            <option {if $usuario.adm == false} selected {/if} value="false">Normal</option>
                        </select> 
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mt-3">
                        Salvar
                    </button>
                </div>

            </div>

        </form>

    </div>

{/block}