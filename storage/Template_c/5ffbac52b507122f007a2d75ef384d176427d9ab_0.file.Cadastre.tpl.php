<?php
/* Smarty version 4.3.0, created on 2023-01-06 14:32:50
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Cadastre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b86952bf2359_04704470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ffbac52b507122f007a2d75ef384d176427d9ab' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Cadastre.tpl',
      1 => 1673029968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b86952bf2359_04704470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178657144663b86952bef649_20937683', 'form');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestLogin.tpl");
}
/* {block 'form'} */
class Block_178657144663b86952bef649_20937683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_178657144663b86952bef649_20937683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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

        <div class="row">
            <div class="col-6 d-flex justify-content-start">
                <a class="btn btn-outline-danger" href="/login">Logar-se</a>
            </div>

            <div class="col-6 d-flex justify-content-end">
                <button type="submit" class="btn btn-danger">Cadastrar</button>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block 'form'} */
}
