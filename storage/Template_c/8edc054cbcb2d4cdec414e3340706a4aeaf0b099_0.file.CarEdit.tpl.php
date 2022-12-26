<?php
/* Smarty version 4.3.0, created on 2022-12-26 17:40:55
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63aa14e7962553_65641960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8edc054cbcb2d4cdec414e3340706a4aeaf0b099' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarEdit.tpl',
      1 => 1672090854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aa14e7962553_65641960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115599392363aa14e793c199_73600931', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_115599392363aa14e793c199_73600931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_115599392363aa14e793c199_73600931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <form action='/admin/carro/editar?id=<?php echo $_smarty_tpl->tpl_vars['carro']->value['carro_id'];?>
' method="POST" enctype="multipart/form-data">
            <div class="form-group row">

                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Digite o nome" value="<?php echo $_smarty_tpl->tpl_vars['carro']->value['carro_name'];?>
" id="carro_name" name="carro_name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" value="<?php echo $_smarty_tpl->tpl_vars['carro']->value['price'];?>
" id="price" name="price"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="marca_id">Marca</label>
                        <select class="form-select" id="marca_id" name="marca_id" required>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['marca_id'] == $_smarty_tpl->tpl_vars['marca']->value['marca_id']) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['marca_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['marca_name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Lugares</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" value="<?php echo $_smarty_tpl->tpl_vars['carro']->value['seat'];?>
" id="seat" name="seat"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="top_speed">Top Speed</label>
                        <select class="form-select" id="top_speed" name="top_speed" required>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['top_speed'] == 1) {?> selected <?php }?> value="1">1</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['top_speed'] == 2) {?> selected <?php }?> value="2">2</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['top_speed'] == 3) {?> selected <?php }?> value="3">3</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['top_speed'] == 4) {?> selected <?php }?> value="4">4</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['top_speed'] == 5) {?> selected <?php }?> value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="acceleration">Acceleration</label>
                        <select class="form-select" id="acceleration" name="acceleration" required>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['acceleration'] == 1) {?> selected <?php }?> value="1">1</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['acceleration'] == 2) {?> selected <?php }?> value="2">2</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['acceleration'] == 3) {?> selected <?php }?> value="3">3</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['acceleration'] == 4) {?> selected <?php }?> value="4">4</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['acceleration'] == 5) {?> selected <?php }?> value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="braking">Braking</label>
                        <select class="form-select" id="braking" name="braking" required>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['braking'] == 1) {?> selected <?php }?> value="1">1</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['braking'] == 2) {?> selected <?php }?> value="2">2</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['braking'] == 3) {?> selected <?php }?> value="3">3</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['braking'] == 4) {?> selected <?php }?> value="4">4</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['braking'] == 5) {?> selected <?php }?> value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="traction">Traction</label>
                        <select class="form-select" id="traction" name="traction" required>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['traction'] == 1) {?> selected <?php }?> value="1">1</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['traction'] == 2) {?> selected <?php }?> value="2">2</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['traction'] == 3) {?> selected <?php }?> value="3">3</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['traction'] == 4) {?> selected <?php }?> value="4">4</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['carro']->value['traction'] == 5) {?> selected <?php }?> value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">  
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Descreva o veiculo" id="description" name="description" required><?php echo $_smarty_tpl->tpl_vars['carro']->value['description'];?>
</textarea>
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
