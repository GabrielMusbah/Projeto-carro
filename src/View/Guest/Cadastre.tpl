{extends file="Template/TemplateGuestLogin.tpl"}

{block name=form}
    <form method="POST" action="/cadastrar">
        <h2 class="text-white text-center">
            Cadastro
        </h2>
        <div class="form-group my-4">
            <label class="text-white" for="exampleInputPassword1">Nome</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome" name="usuario_name" id="usuario_name" required>
        </div>

        <div class="form-group my-4">
        <label class="text-white" for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" id="email" required>
        </div>

        <div class="form-group my-4">
        <label class="text-white" for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password" id="password" required>
        </div>

        <div class="form-group my-4">
            <label class="text-white" for="exampleInputPassword1">Confirmar senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">Cadastrar</button>
        </div>
    </form>
{/block}