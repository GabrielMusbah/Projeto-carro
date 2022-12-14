{extends file="TemplateGuestLogin.tpl"}

{block name=form}
    <h2 class="text-white text-center">
        Cadastro
    </h2>
    <div class="form-group my-4">
        <label class="text-white" for="exampleInputPassword1">Name</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group my-4">
        <label class="text-white" for="exampleInputPassword1">Password confirm</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-danger">Submit</button>
{\block}