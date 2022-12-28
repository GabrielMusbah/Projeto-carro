<?php
/* Smarty version 4.3.0, created on 2022-12-28 14:14:40
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ac879016f294_24278902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e559b0e935efa2b6a3a2594a68d6838903bcf0b5' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Brand.tpl',
      1 => 1672177671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ac879016f294_24278902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148787425163ac879016c8e1_13974151', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_148787425163ac879016c8e1_13974151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_148787425163ac879016c8e1_13974151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <a href="/admin/marca/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>

        <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col">Id</th>
                <th class="text-center" scope="col">Nome</th>
                <th class="text-end" scope="col">Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itens']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['marca_trash'] == false) {?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['marca_id'];?>
</th>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['marca_name'];?>
</td>
                        <td class="d-flex justify-content-end">
                            <span class="">
                                <a href="/admin/marca/edita?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['marca_id'];?>
" class="btn btn-warning btn-sm me-2">
                                    Alterar
                                </a>
                                <a href="/admin/marca/deletar?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['marca_id'];?>
" class='btn btn-danger btn-sm'>
                                    Excluir
                                </a>
                            </span>
                        </td>
                    </tr>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    </main>

<?php
}
}
/* {/block 'main'} */
}
