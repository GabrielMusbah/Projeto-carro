<?php
/* Smarty version 4.3.0, created on 2022-12-19 18:01:28
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/User.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0df385bc630_44013796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7803301d57be11aed4e2abb25a8d324146c752' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/User.tpl',
      1 => 1671487285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0df385bc630_44013796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66525059263a0df385b45b1_23537643', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_66525059263a0df385b45b1_23537643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_66525059263a0df385b45b1_23537643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <a href="/admin/usuario/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itens']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li class="list-group-item d-flex justify-content-between">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                    <span>
                        <a href="/admin/historico" class="btn btn-info btn-sm me-2">
                            Compras
                        </a>
                        <a href="/admin/usuario/edita" class="btn btn-warning btn-sm me-2">
                            Alterar
                        </a>
                        <a href="#" class='btn btn-danger btn-sm'>
                            Excluir
                        </a>
                    </span>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

    </main>

<?php
}
}
/* {/block 'main'} */
}