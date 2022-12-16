<?php
/* Smarty version 4.3.0, created on 2022-12-16 11:39:03
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Error/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639c9117f3dd87_62283571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '809d8b568c4e5cf88d17294d898fce54d8ecb444' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Error/404.tpl',
      1 => 1671205140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639c9117f3dd87_62283571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_375365914639c9117f3bc06_06237991', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateError.tpl");
}
/* {block 'main'} */
class Block_375365914639c9117f3bc06_06237991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_375365914639c9117f3bc06_06237991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="my-5  bg-white p-5 rounded-3">
        <h3>
            Erro 404 - Pagina não encontrada
        </h3>
        <p>
            A pagina que voce esta tentando entrar não foi encontrada
        </p>
        <p>
            Retorne para a pagina incial
        </p>
        <a href="/index" class="btn btn-primary">Voltar</a>
    </div>
<?php
}
}
/* {/block 'main'} */
}
