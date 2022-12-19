<?php
/* Smarty version 4.3.0, created on 2022-12-19 14:11:24
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0a94c073b91_11026600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db17cf2e4954c3cb43be3b63f205fe4f12c23ea3' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarCreate.tpl',
      1 => 1671463084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0a94c073b91_11026600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33934095063a0a94c070f73_63036097', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_33934095063a0a94c070f73_63036097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_33934095063a0a94c070f73_63036097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <form action=''>
            <div class="form-group row">

                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Marca</label>
                        <select class="form-select" id="inputGroupSelect01" required>
                        <option value="1">Ford</option>
                        <option value="2">Dodge</option>
                        <option value="3">BMW</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Top Speed</label>
                        <select class="form-select" id="inputGroupSelect01" required>
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
                        <label class="input-group-text" for="inputGroupSelect01">Acceleration</label>
                        <select class="form-select" id="inputGroupSelect01" required>
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
                        <label class="input-group-text" for="inputGroupSelect01">Braking</label>
                        <select class="form-select" id="inputGroupSelect01" required>
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
                        <label class="input-group-text" for="inputGroupSelect01">Traction</label>
                        <select class="form-select" id="inputGroupSelect01" required>
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
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                        <label for="floatingTextarea">Descricao</label>
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
