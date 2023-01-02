<?php
/* Smarty version 4.3.0, created on 2023-01-02 09:29:39
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b2dc43338025_96246838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e41c01433b8e7ba900715c894e58019ee9f23d' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Index.tpl',
      1 => 1672666177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b2dc43338025_96246838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158069422863b2dc4332f128_21814004', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestSale.tpl");
}
/* {block 'main'} */
class Block_158069422863b2dc4332f128_21814004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_158069422863b2dc4332f128_21814004',
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
        <select class="selec form-select form-select-sm text-white selec-filter" style="background-color: #982a25; " aria-label=".form-select-sm">
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 1) {?> selected <?php }?> value="1">Preço crescente</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 2) {?> selected <?php }?> value="2">Preço decrescente</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 3) {?> selected <?php }?> value="3">Nome A-Z</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 4) {?> selected <?php }?> value="4">Nome Z-A</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 5) {?> selected <?php }?> value="5">Assento crescente</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 6) {?> selected <?php }?> value="6">Assento decrescente</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 7) {?> selected <?php }?> value="7">Marca A-Z</option>
            <option <?php if ($_smarty_tpl->tpl_vars['filter']->value == 8) {?> selected <?php }?> value="8">Marca Z-A</option>
        </select>
        </div>
    </nav>

    <?php if (empty($_smarty_tpl->tpl_vars['cars']->value)) {?>

        <div class="d-flex justify-content-center row">
            <div class="card p-3 col-sm-12 col-md-8" style="background-color: #230403!important;">
                                <div class="card-body p-5 m-5">
                    <h1 class="text-center p-3 mb-0 text-white mb-5">
                        Ops, nada foi encontrado
                    </h1>
                    <p class="text-justify p-2 pt-0 mb-0 text-white mb-5">
                        No momento não temos nenhum veiculo a venda no site, estamos em em contrução e 
                        os veiculos estão sendo cadastrados, peço paciencia que nos proximos dias o site vai ser regularizado e teremos varios carros a venda.
                    </p>
                    <p class="text-white text-end">
                        Obrigado pela compreenção
                    </p>
                </div>
            </div>
        </div>

    <?php } else { ?>

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
                            <div class="p-3 d-flex justify-content-between">
                                <div class="d-flex">
                                    <img src="./assets/guest/img/uploads/brand/<?php echo $_smarty_tpl->tpl_vars['car']->value['marca_src'];?>
" class="card-img-top px-1" alt="" style="width: 50px; heigth: 50px;">
                                    <p class="mb-0 align-self-center">
                                    <?php echo $_smarty_tpl->tpl_vars['car']->value['marca_name'];?>

                                    </p>
                                </div>
                                <p class=" mb-0 position-relative align-self-center">
                                    <i class="fas fa-user-alt p-2"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                                        <?php echo $_smarty_tpl->tpl_vars['car']->value['seat'];?>

                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="./assets/guest/img/uploads/car/<?php echo $_smarty_tpl->tpl_vars['car']->value['carro_src'];?>
" class="card-img-top img-fluid px-1" style="heigth: 350px;" alt="">
                        </div>
                        <div class="card-body text-white">
                            <div class="row px-1">
                                <p class="col-sm-12 col-xl-7 px-0 m-0 text-sm-center text-xl-start pb-sm-2 pb-xl-0 d-flex align-self-center">
                                    <?php echo $_smarty_tpl->tpl_vars['car']->value['carro_name'];?>

                                </p>

                                <a class="col-sm-12 col-xl-5" href="/compra?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['carro_id'];?>
">
                                    <button class="button-red-white py-1 text-white" style="width: 100%;">R$ <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['car']->value['price'],2,',','.');?>
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

    <?php }
}
}
/* {/block 'main'} */
}
