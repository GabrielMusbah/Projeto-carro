<?php
/* Smarty version 4.3.0, created on 2022-12-15 08:52:53
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639b18a5bc6901_70357776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '195ec0a14eb7521e211995b3aa8a60abec4498b1' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl',
      1 => 1671107500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639b18a5bc6901_70357776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_527700028639b18a5bc4079_06324439', 'form');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "TemplateGuestLogin.tpl");
}
/* {block 'form'} */
class Block_527700028639b18a5bc4079_06324439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_527700028639b18a5bc4079_06324439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'form'} */
}
