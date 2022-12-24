{extends file="Template/TemplateAdminEdit.tpl"}

{block name = main}

    <main class="container mt-0  p-3">

        <div class="row d-flex justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-12 border-login bg-login">
                
                <form method="POST" action="/admin/logar">
                    <h2 class="text-white text-center">
                        Login
                    </h2>

                    <div class="form-group my-4">
                    <label class="text-dark" for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>

                    <div class="form-group my-4">
                    <label class="text-dark" for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger">Logar</button>
                    </div>
                </form>
                    
            </div>

        </div>

    </main>
    


{/block}