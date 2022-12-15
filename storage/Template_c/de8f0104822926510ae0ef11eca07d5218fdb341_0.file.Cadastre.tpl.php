<?php
/* Smarty version 4.3.0, created on 2022-12-15 08:32:59
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Cadastre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639b13fbce1037_45631414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de8f0104822926510ae0ef11eca07d5218fdb341' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Cadastre.tpl',
      1 => 1671107575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639b13fbce1037_45631414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94674314639b13fbcdf7f6_08567135', 'form');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "TemplateGuestLogin.tpl");
}
/* {block 'form'} */
class Block_94674314639b13fbcdf7f6_08567135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_94674314639b13fbcdf7f6_08567135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="text-white text-center">
        Cadastro
    </h2>
    <div class="form-group my-4">
        <label class="text-white" for="exampleInputPassword1">Nome</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nome">
    </div>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    </div>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>

    <div class="form-group my-4">
        <label class="text-white" for="exampleInputPassword1">Confirmar senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-danger">Cadastrar</button>
    </div>
<?php
}
}
/* {/block 'form'} */
}
