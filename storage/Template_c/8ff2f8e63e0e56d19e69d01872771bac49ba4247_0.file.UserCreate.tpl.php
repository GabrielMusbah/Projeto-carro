<?php
/* Smarty version 4.3.0, created on 2022-12-26 15:20:39
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/UserCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a9f407aae1b4_42910700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff2f8e63e0e56d19e69d01872771bac49ba4247' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/UserCreate.tpl',
      1 => 1672082284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a9f407aae1b4_42910700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21771522563a9f407aac580_07402772', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_21771522563a9f407aac580_07402772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_21771522563a9f407aac580_07402772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <form method="POST" action="/admin/cadastrar">
            <div class="form-group row">

                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="usuario_name" id="usuario_name" required>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email" id="email" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Senha</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="password" id="password" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group mb-0">
                        <label class="input-group-text" for="adm">Modo</label>
                        <select class="form-select" name="adm" id="adm" required>
                            <option value="true">Admin</option>
                            <option value="false">Normal</option>
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

    </main>

<?php
}
}
/* {/block 'main'} */
}
