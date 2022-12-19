<?php
/* Smarty version 4.3.0, created on 2022-12-19 11:19:04
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a080e843da65_95624192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8edc054cbcb2d4cdec414e3340706a4aeaf0b099' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/CarEdit.tpl',
      1 => 1671463096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a080e843da65_95624192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207538873263a080e843be84_71779693', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_207538873263a080e843be84_71779693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_207538873263a080e843be84_71779693',
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
