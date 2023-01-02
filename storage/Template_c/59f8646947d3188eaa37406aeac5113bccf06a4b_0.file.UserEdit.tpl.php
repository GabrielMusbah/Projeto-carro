<?php
/* Smarty version 4.3.0, created on 2022-12-30 17:50:02
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/UserEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63af5d0a7fb784_33845531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f8646947d3188eaa37406aeac5113bccf06a4b' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/UserEdit.tpl',
      1 => 1672436998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63af5d0a7fb784_33845531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188463115063af5d0a7f7ef6_62611260', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_188463115063af5d0a7f7ef6_62611260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_188463115063af5d0a7f7ef6_62611260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">

        <form method="POST" action="/admin/usuario/editar?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario_id'];?>
">
            <div class="form-group row">

                <div class="col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario_name'];?>
" name="usuario_name" id="usuario_name" required>
                    </div>
                </div>
                
                <div class="col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
" name="email" id="email" required>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Senha</span>
                        <input type="text" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1" name="password" id="password" required>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="input-group mb-0">
                        <label class="input-group-text" for="adm">Modo</label>
                        <select class="form-select" name="adm" id="adm" required>
                            <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['adm'] == true) {?> selected <?php }?> value="true">Admin</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['usuario']->value['adm'] == false) {?> selected <?php }?> value="false">Normal</option>
                        </select> 
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mt-3">
                        Salvar
                    </button>
                </div>

            </div>

        </form>

    </div>

<?php
}
}
/* {/block 'main'} */
}
