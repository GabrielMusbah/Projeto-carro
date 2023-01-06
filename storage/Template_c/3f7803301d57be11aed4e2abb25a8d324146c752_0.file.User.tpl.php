<?php
/* Smarty version 4.3.0, created on 2023-01-06 14:26:23
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/User.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b867cf347208_03384452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7803301d57be11aed4e2abb25a8d324146c752' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/User.tpl',
      1 => 1673029558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b867cf347208_03384452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121324280563b867cf3410e7_40975429', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_121324280563b867cf3410e7_40975429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_121324280563b867cf3410e7_40975429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <a href="/admin/usuario/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>

        <?php if (empty($_smarty_tpl->tpl_vars['itens']->value)) {?>
            <div class="mt-4">
                <h1 class="text-center p-3 mb-0">Ops, nada foi encontrado</h1>
                <p class="text-center p-2 pt-0 mb-0">A sua filtragem não retornou nenhum usuario, provavelmente não temos informações do banco da dados.</p>
            </div>
        <?php } else { ?>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Nome</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Modo</th>
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
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['usuario_trash'] == false) {?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['usuario_id'];?>
</th>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['usuario_name'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                                    <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['item']->value['adm'] == 1) {?> Admin <?php } else { ?> Normal <?php }?></td>
                                    <td class="d-flex justify-content-end">
                                        <span class="" style="white-space: nowrap;">
                                                                                        <a href="/admin/usuario/edita?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['usuario_id'];?>
" class="btn btn-warning btn-sm me-2">
                                                Alterar
                                            </a>
                                            <a href="/admin/usuario/deletar?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['usuario_id'];?>
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
            </div>

        <?php }?>

    </main>

<?php
}
}
/* {/block 'main'} */
}
