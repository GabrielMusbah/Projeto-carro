<?php
/* Smarty version 4.3.0, created on 2022-12-23 09:52:15
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a5b28fed89a4_87997357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db17cf2e4954c3cb43be3b63f205fe4f12c23ea3' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarCreate.tpl',
      1 => 1671803520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a5b28fed89a4_87997357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61111138463a5b28fed6919_23818259', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_61111138463a5b28fed6919_23818259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_61111138463a5b28fed6919_23818259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <form action='/admin/carro/criar' method="POST">
            <div class="form-group row">

                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Digite o nome" id="name" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" id="price" name="price"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="marca_id">Marca</label>
                        <select class="form-select" id="marca_id" name="marca_id" required>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['marca_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="top_speed">Top Speed</label>
                        <select class="form-select" id="top_speed" name="top_speed" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="acceleration">Acceleration</label>
                        <select class="form-select" id="acceleration" name="acceleration" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="braking">Braking</label>
                        <select class="form-select" id="braking" name="braking" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="traction">Traction</label>
                        <select class="form-select" id="traction" name="traction" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">  
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Descreva o veiculo" id="description" name="description" required></textarea>
                        <label for="description">Descricao</label>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-3">
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
