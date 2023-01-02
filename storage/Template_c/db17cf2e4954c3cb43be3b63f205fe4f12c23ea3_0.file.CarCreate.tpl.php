<?php
/* Smarty version 4.3.0, created on 2022-12-30 17:56:53
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63af5ea5e9fe05_83216521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db17cf2e4954c3cb43be3b63f205fe4f12c23ea3' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarCreate.tpl',
      1 => 1672437412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63af5ea5e9fe05_83216521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193300119063af5ea5e9e4a6_15124683', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_193300119063af5ea5e9e4a6_15124683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_193300119063af5ea5e9e4a6_15124683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">

        <form action='/admin/carro/criar' method="POST" enctype="multipart/form-data">
            <div class="form-group row">

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Digite o nome" id="carro_name" name="carro_name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" id="price" name="price"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
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
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['marca_name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Lugares</span>
                        <input type="text" class="form-control" placeholder="Digite o preço" id="seat" name="seat"  aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
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

                <div class="col-xl-3 col-md-6 col-12">
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

                <div class="col-xl-3 col-md-6 col-12">
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

                <div class="col-xl-3 col-md-6 col-12">
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

                <div class="col-md-6 col-12 mt-3  d-flex">
                    <div class="p-2" style="border: 1px solid #ced4da; border-radius: 0.25rem;">
                        <label for="picCar">Imagem do carro:</label>
                        <input type="file" id="file" class="ms-2 form-control-file" name="picCar" accept="image/*" class="form-control" required>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-3">
                    Salvar
                </button>
            </div>

        </form>



    </div>

<?php
}
}
/* {/block 'main'} */
}
