<?php
/* Smarty version 4.3.0, created on 2022-12-15 15:49:32
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639b7a4ca93012_16872654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e41c01433b8e7ba900715c894e58019ee9f23d' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Index.tpl',
      1 => 1671133726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639b7a4ca93012_16872654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1557230900639b7a4ca89ca9_78131258', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestSale.tpl");
}
/* {block 'main'} */
class Block_1557230900639b7a4ca89ca9_78131258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1557230900639b7a4ca89ca9_78131258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/Projeto-carro/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

    <nav class="row d-flex justify-content-between">
        <h3 class="col-sm-12 col-md-6 col-lg-3 py-3 text-white d-flex align-self-center mb-0">
            NOVIDADES
        </h3>
        <div class="col-sm-12 col-md-6 col-lg-3 py-3 d-flex align-self-center">
            <select class="selec form-select form-select-sm text-white" style="background-color: #982a25; " aria-label=".form-select-sm">
                <option value="1">Preço crescente</option>
                <option value="2">Preço decrescente</option>
            </select>
        </div>
    </nav>

    <div class="row card-container">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card bg-preto">
                    <div class="card-header text-white p-0">
                        <div class="p-3 d-flex justify-content-end">
                            <p class=" mb-0 position-relative ">
                                <i class="fas fa-user-alt p-2"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                                    <?php echo $_smarty_tpl->tpl_vars['car']->value['seat'];?>

                                </span>
                            </p>
                        </div>
                    </div>
                    <img src="./assets/guest/img/uploads/cars/<?php echo $_smarty_tpl->tpl_vars['car']->value['img'];?>
.jpg" class="card-img-top px-1" alt="">
                    <div class="card-body text-white">
                        <div class="row px-1">
                            <p class="col-sm-12 col-xl-7 px-0 m-0 text-sm-center text-xl-start pb-sm-2 pb-xl-0 d-flex align-self-center">
                                <?php echo $_smarty_tpl->tpl_vars['car']->value['name'];?>

                            </p>

                            <a class="col-sm-12 col-xl-5" href="/compra?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
">
                            <button class="button-red-white py-1 text-white">R$ <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['car']->value['price'],2,',','.');?>
</button>
                            </a>
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
