<?php
/* Smarty version 4.3.0, created on 2022-12-27 16:16:51
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Sale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ab52b38d0608_75545529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2984ca051358e109780dd3dad99f39cd8d706563' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/Sale.tpl',
      1 => 1672172209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab52b38d0608_75545529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139656722063ab52b38c7cb4_62720012', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateGuestSale.tpl");
}
/* {block 'main'} */
class Block_139656722063ab52b38c7cb4_62720012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_139656722063ab52b38c7cb4_62720012',
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
                        <img src="./assets/guest/img/uploads/brand/<?php echo $_smarty_tpl->tpl_vars['car']->value['marca_src'];?>
" style="width: 80px;" class="img col-6" alt>
                        <h3 class="text-white col-6 mb-0 d-flex align-self-center"><?php echo $_smarty_tpl->tpl_vars['car']->value['carro_name'];?>
</h3>
                    </div>
                    
                </div>

            </div>

            <div class="col-sm-12 col-lg-6">
                
                <div class="p-4">
                    <img src="./assets/guest/img/uploads/car/<?php echo $_smarty_tpl->tpl_vars['car']->value['carro_src'];?>
" class="img-fluid" alt="img-carro" style="height: 450px; width: 500px;">
                </div>

                <div class="p-4 pt-0">
                    <p class="text-white text-justify">
                        <?php echo $_smarty_tpl->tpl_vars['car']->value['description'];?>

                    </p>
                </div>

            </div>

            <div class="col-sm-12 col-lg-6 p-4">
                
                <div class="mb-4" style="height: 200px;">
                    <h4 class="text-center text-white pb-2 m-0">Vehicle Stats</h4>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-lg-8">
                        
                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Top Speed
                                </p>
                                <p class="col-8 mb-0 text-end">
                                    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['car']->value['top_speed']+1 - (1) : 1-($_smarty_tpl->tpl_vars['car']->value['top_speed'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                        <i class="text-white fas fa-square p-2 "></i>
                                    <?php }
}
?>
                                    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5-$_smarty_tpl->tpl_vars['car']->value['top_speed']+1 - (1) : 1-(5-$_smarty_tpl->tpl_vars['car']->value['top_speed'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                        <i class="text-white far fa-square p-2 "></i>
                                    <?php }
}
?>
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Acceleration
                                </p>
                                <p class="col-8 mb-0 text-end">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['car']->value['acceleration']+1 - (1) : 1-($_smarty_tpl->tpl_vars['car']->value['acceleration'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <i class="text-white fas fa-square p-2 "></i>
                                <?php }
}
?>
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5-$_smarty_tpl->tpl_vars['car']->value['acceleration']+1 - (1) : 1-(5-$_smarty_tpl->tpl_vars['car']->value['acceleration'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <i class="text-white far fa-square p-2 "></i>
                                <?php }
}
?>
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Braking
                                </p>
                                <p class="col-8 mb-0 text-end">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['car']->value['braking']+1 - (1) : 1-($_smarty_tpl->tpl_vars['car']->value['braking'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <i class="text-white fas fa-square p-2 "></i>
                                <?php }
}
?>
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5-$_smarty_tpl->tpl_vars['car']->value['braking']+1 - (1) : 1-(5-$_smarty_tpl->tpl_vars['car']->value['braking'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <i class="text-white far fa-square p-2 "></i>
                                <?php }
}
?>
                                </p>
                            </div>

                            <div class="row">
                                <p class="col-4 mb-0 text-white">
                                    Traction
                                </p>
                                <p class="col-8 mb-0 text-end">
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['car']->value['traction']+1 - (1) : 1-($_smarty_tpl->tpl_vars['car']->value['traction'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <i class="text-white fas fa-square p-2 "></i>
                                <?php }
}
?>
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5-$_smarty_tpl->tpl_vars['car']->value['traction']+1 - (1) : 1-(5-$_smarty_tpl->tpl_vars['car']->value['traction'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <i class="text-white far fa-square p-2 "></i>
                                <?php }
}
?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <form  method="POST" action="/comprar?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['carro_id'];?>
">
                        <h4 class="text-center text-white pb-2 m-0">Select from available colors to order</h4>

                        <div class="row justify-content-center" style="height: 200px;">

                            <div class="col-sm-12 col-lg-8">

                                <div class="row justify-content-evenly">

                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-secondary" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="cinza">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-info" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="azul claro">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-light" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="branco">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center mb-3">
                                        <input class="form-check-input bg-dark" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="preto">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input bg-primary" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="azul">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input bg-danger" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="vermelho">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input bg-warning" style="height: 40px; width: 40px;" type="radio" name="color" id="color" value="amarelo">
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <input class="form-check-input" style="height: 40px; width: 40px; background-color: green" type="radio" name="color" id="color" value="verde">
                                    </div>
                                
                                </div>

                            </div>

                        </div>

                    
                            
                        <div class="row justify-content-center mt-3">
                            <p class="col-sm-12 col-xl-4 text-center text-xl-start text-money mb-0" >
                                R$ <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['car']->value['price'],2,',','.');?>

                            </p>
                            <div class="col-sm-12 col-xl-4 d-flex justify-content-center">
                                <button class="button-red-white" style="height: 100%; width: 100%; max-width: 200px">
                                    ORDER
                                </button>
                            </div>
                        </div>
                </form>
            </div>

        </div>

    </div>
<?php
}
}
/* {/block 'main'} */
}
