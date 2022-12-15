<?php
/* Smarty version 4.3.0, created on 2022-12-15 15:51:34
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639b7ac6b2dc22_92002306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b503b2053c68aaf2c881de6868e5b587c091818' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl',
      1 => 1671133807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639b7ac6b2dc22_92002306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1239692187639b7ac6b2c996_74392054', 'form');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestLogin.tpl");
}
/* {block 'form'} */
class Block_1239692187639b7ac6b2c996_74392054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_1239692187639b7ac6b2c996_74392054',
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
