<?php
/* Smarty version 4.3.0, created on 2023-01-02 16:29:21
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/BrandEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b33ea1d981c6_32885047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed41c500f2c346dca4fe752672dc7a1524b067c' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/BrandEdit.tpl',
      1 => 1672435827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b33ea1d981c6_32885047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86463770663b33ea1d909c3_39512238', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_86463770663b33ea1d909c3_39512238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_86463770663b33ea1d909c3_39512238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">

        <form action='/admin/marca/editar?id=<?php echo $_smarty_tpl->tpl_vars['marca']->value['marca_id'];?>
' method="POST" enctype="multipart/form-data">
            <div class="form-group row d-flex justify-content-center">

                <div class="col-6">

                    <div class="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['marca_name'];?>
" placeholder="Username" name="marca_name" id="marca_name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                

                    <div class="mt-3  d-flex">
                        <div class="p-2" style="border: 1px solid #ced4da; border-radius: 0.25rem;">
                            <label for="picCar">Imagem do carro:</label>
                            <input type="file" id="file" class="ms-2 form-control-file" name="picBrand" accept="image/*" class="form-control">
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">
                    Alterar
                </button>
            </div>

        </form>

    </div>

<?php
}
}
/* {/block 'main'} */
}
