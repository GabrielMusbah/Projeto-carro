<?php
/* Smarty version 4.3.0, created on 2022-12-16 10:12:22
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/EditList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639c7cc6495634_75979886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a85dab153875292d5c670646a1afa82ae4461c' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/EditList.tpl',
      1 => 1671134739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639c7cc6495634_75979886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318260909639c7cc646f3c3_71610366', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_1318260909639c7cc646f3c3_71610366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1318260909639c7cc646f3c3_71610366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">
    <a href="#" class="btn btn-primary mb-3">Criar <?php echo $_smarty_tpl->tpl_vars['itemEdit']->value;?>
</a>

        <div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                <div class="d-flex justify-content-between border border-black p-2">
                    <p>
                        Jose
                    </p>
                    <div>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <a href="#" class="btn btn-danger">Excluir</a>
                    </div>
                </div>
            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </main>

<?php
}
}
/* {/block 'main'} */
}