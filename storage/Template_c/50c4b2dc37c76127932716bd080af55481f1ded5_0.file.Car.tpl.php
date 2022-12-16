<?php
/* Smarty version 4.3.0, created on 2022-12-16 16:35:12
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639cd6804c1730_47876098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c4b2dc37c76127932716bd080af55481f1ded5' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Car.tpl',
      1 => 1671222792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639cd6804c1730_47876098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_642361258639cd6804b9257_71222218', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_642361258639cd6804b9257_71222218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_642361258639cd6804b9257_71222218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <a href="/admin/carro/cria" class="btn btn-primary mb-3 p-2">Criar <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
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
                        <a href="/admin/carro/edita" class="btn btn-warning btn-sm me-2">
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
