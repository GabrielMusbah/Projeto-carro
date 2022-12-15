<?php
/* Smarty version 4.3.0, created on 2022-12-15 15:49:34
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Sale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639b7a4e8a7348_45704839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2984ca051358e109780dd3dad99f39cd8d706563' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Sale.tpl',
      1 => 1671133707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639b7a4e8a7348_45704839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_989565122639b7a4e8954a6_10675306', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestSale.tpl");
}
/* {block 'main'} */
class Block_989565122639b7a4e8954a6_10675306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_989565122639b7a4e8954a6_10675306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/Projeto-carro/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

    <div class="container p-4">
                    
        <div class="row">
            
            <div class="col-12 px-4">
                
                <div class="row justify-content-center">

                    <div class="col-12 row">
                        <img src="./assets/guest/img/uploads/mark/<?php echo $_smarty_tpl->tpl_vars['car']->value['mark'];?>
.png" style="width: 80px;" class="img col-6" alt>
                        <h3 class="text-white col-6 mb-0 d-flex align-self-center"><?php echo $_smarty_tpl->tpl_vars['car']->value['name'];?>
</h3>
                    </div>
                    
                </div>

            </div>

            <div class="col-sm-12 col-lg-6">
                
                <div class="p-4">
                    <img src="./assets/guest/img/uploads/cars/<?php echo $_smarty_tpl->tpl_vars['car']->value['img'];?>
.jpg" class="img-fluid" alt="img-carro">
                </div>

                <div class="p-4 pt-0">
                    <p class="text-white text-justify">
                        <?php echo $_smarty_tpl->tpl_vars['car']->value['description'];?>

                    </p>
                </div>

            </div>

            <div class="col-sm-12 col-lg-6 p-4">
                
                <div class="mb-4">
                    <h4 class="text-center text-white pb-2 m-0">Vehicle Stats</h4>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-lg-8">
                        
                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Top Speed
                                </p>
                                <p class="col-8 mb-0 text-end">
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white far fa-square p-2 "></i>
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Acceleration
                                </p>
                                <p class="col-8 mb-0 text-end">
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white far fa-square p-2 "></i>
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Braking
                                </p>
                                <p class="col-8 mb-0 text-end">
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white far fa-square p-2 "></i>
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Traction
                                </p>
                                <p class="col-8 mb-0 text-end">
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white fas fa-square p-2 "></i>
                                    <i class="text-white far fa-square p-2 "></i>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-center text-white pb-2 m-0">Select from available colors to order</h4>

                    <div class="row justify-content-center">

                        <div class="col-sm-12 col-lg-8">

                            <div class="row justify-content-evenly">

                                <div class="col-3">
                                    <input class="form-check-input bg-secondary" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-info" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="2">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-light" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="3">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-dark" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="4">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-secondary" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="5">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-info" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="6">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-light" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="7">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input bg-dark" style="height: 40px; width: 40px;" type="radio" name="exampleRadios" id="exampleRadios1" value="8">
                                </div>
                            
                            </div>

                        </div>

                    </div>

                </div>
                    
                <div class="row justify-content-center ">
                    <p class="col-sm-12 col-xl-4 text-center text-xl-start text-money mb-0" >
                        R$ <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['car']->value['price'],2,',','.');?>

                    </p>
                    <div class="col-sm-12 col-xl-4 d-flex justify-content-center">
                        <button class="button-red-white" style="height: 100%; width: 100%; max-width: 200px" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#msg_buy_make">
                            ORDER
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php
}
}
/* {/block 'main'} */
}
