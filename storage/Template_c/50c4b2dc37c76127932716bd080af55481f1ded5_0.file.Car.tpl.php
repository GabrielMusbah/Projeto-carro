<?php
/* Smarty version 4.3.0, created on 2023-01-03 16:44:38
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b493b628e128_51680179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c4b2dc37c76127932716bd080af55481f1ded5' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Car.tpl',
      1 => 1672661076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b493b628e128_51680179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196466794763b493b628a5f1_26058873', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_196466794763b493b628a5f1_26058873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_196466794763b493b628a5f1_26058873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <a href="/admin/carro/cria" class="btn btn-primary mb-3 p-2">Criar Novo</a>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Id</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Preço</th>
                        <th class="text-center" scope="col">Marca</th>
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
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['carro_trash'] == false) {?>
                            <tr>
                                <th class="text-center" scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['carro_id'];?>
</th>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['carro_name'];?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['marca_name'];?>
</td>
                                <td class="d-flex justify-content-end">
                                    <span class="" style="white-space: nowrap;">
                                                                                <a href="/admin/carro/edita?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['carro_id'];?>
" class="btn btn-warning btn-sm me-2">
                                            Alterar
                                        </a>
                                        <a href="/admin/carro/deletar?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['carro_id'];?>
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
        


    </main>

<?php
}
}
/* {/block 'main'} */
}
