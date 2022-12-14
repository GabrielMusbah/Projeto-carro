<?php
/* Smarty version 4.3.0, created on 2022-12-14 16:31:31
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639a32a37e7348_07436560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '195ec0a14eb7521e211995b3aa8a60abec4498b1' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Login.tpl',
      1 => 1671049888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639a32a37e7348_07436560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1666508443639a32a37e4673_60511599', 'form');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "TemplateGuestLogin.tpl");
}
/* {block 'form'} */
class Block_1666508443639a32a37e4673_60511599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_1666508443639a32a37e4673_60511599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="text-white text-center">
        Login
    </h2>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group my-4">
    <label class="text-white" for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-danger">Submit</button>
<?php
}
}
/* {/block 'form'} */
}
