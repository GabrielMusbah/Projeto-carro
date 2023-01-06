{extends file="Template/TemplateGuestLogin.tpl"}

{block name=form}
    <form method="POST" action="/logar">
        <h2 class="text-white text-center">
            Login
        </h2>

        <div class="form-group my-4">
        <label class="text-white" for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
        </div>

        <div class="form-group my-4">
        <label class="text-white" for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
        </div>

        <div class="row">
            <div class="col-6 d-flex justify-content-start">
                <a class="btn btn-outline-danger" href="/cadastro">Cadastre-se</a>
            </div>

            <div class="col-6 d-flex justify-content-end">
                <button type="submit" class="btn btn-danger">Logar</button>
            </div>
        </div>
    </form>
{/block}
