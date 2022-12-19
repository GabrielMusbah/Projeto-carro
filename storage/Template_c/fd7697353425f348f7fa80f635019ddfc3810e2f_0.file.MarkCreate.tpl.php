<?php
/* Smarty version 4.3.0, created on 2022-12-19 16:33:53
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/MarkCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0cab1a1c5b5_41545187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7697353425f348f7fa80f635019ddfc3810e2f' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/MarkCreate.tpl',
      1 => 1671482031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0cab1a1c5b5_41545187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123138254463a0cab1a1bd79_53498840', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_123138254463a0cab1a1bd79_53498840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_123138254463a0cab1a1bd79_53498840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <form action='/admin/marca/criar' method="POST" enctype="multipart/form-data">
            <div class="form-group row d-flex justify-content-center">

                <div class="col-6">

                    <div class="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" placeholder="Username" name="name-brand" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                
                    <div class="">
                        <div class="form-group">
                        <input type="file" id="file" class="form-control-file" name="pic" accept="image/*" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">
                    Salvar
                </button>
            </div>

        </form>

    </main>

<?php
}
}
/* {/block 'main'} */
}
