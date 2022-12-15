{extends file="Template/TemplateGuestLogin.tpl"}

{block name=form}
    <h2 class="text-white text-center">
        Login
    </h2>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    </div>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-danger">Logar</button>
    </div>
{/block}
