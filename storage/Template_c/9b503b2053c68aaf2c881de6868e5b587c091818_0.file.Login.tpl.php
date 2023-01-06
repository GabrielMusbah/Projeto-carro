<?php
/* Smarty version 4.3.0, created on 2023-01-06 14:31:44
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b869108f41b8_70399222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b503b2053c68aaf2c881de6868e5b587c091818' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl',
      1 => 1673029902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b869108f41b8_70399222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146301136963b869108f1bd9_65145414', 'form');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestLogin.tpl");
}
/* {block 'form'} */
class Block_146301136963b869108f1bd9_65145414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_146301136963b869108f1bd9_65145414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'form'} */
}
