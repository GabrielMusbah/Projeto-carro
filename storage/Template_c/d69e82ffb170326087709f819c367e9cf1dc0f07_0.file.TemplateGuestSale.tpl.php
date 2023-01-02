<?php
/* Smarty version 4.3.0, created on 2023-01-02 09:35:38
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateGuestSale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b2ddaa526a24_18500004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69e82ffb170326087709f819c367e9cf1dc0f07' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateGuestSale.tpl',
      1 => 1672666530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b2ddaa526a24_18500004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/guest/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" type="imagem/png" href="./assets/common/img/icon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Legendary Motor Sport - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

    <header class="border-header">
        <div class="container mb-4">
            <div class="row px-1">
                <div class="col-sm-12 col-md-6 col-lg-4 p-4">
                    <img class="img-fluid" src="./assets/guest/img/legendary-logo.png" alt="">
                    <p class="text-red text-shadow text-center m-0">
                        CONFIRA NOSSOS CARROS TOPO DE LINHA
                    </p>
                    <P class="text-white text-shadow text-center m-0">
                        ALTO DESEMPENHO POR PREÇOS INCRÍVEIS
                    </P>
                </div>
            </div>
        </div>
    </header>

    <main class="container bg-main border-main m-main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105778708963b2ddaa521390_06615738', 'main');
?>


    </main>

    <footer class="bg-preto border-top-red mt-5">
        <div class="container">
            <div class="row">
                <?php if (!empty($_smarty_tpl->tpl_vars['imgs']->value)) {?>
                    <div class="col-12 row d-flex justify-content-around p-3 pb-1 owl-carousel owl-theme">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgs']->value, 'img');
$_smarty_tpl->tpl_vars['img']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->do_else = false;
?>

                            <div class="item d-flex justify-content-center">
                                <img src="./assets/guest/img/icon/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
.png" style="width: 50px;" alt="">
                            </div>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </div>
                <?php }?>
                <h3 class="text-center p-2 m-0 text-white col-12">© 2022 Musbah Saleh</h3>
            </div>
        </div>
    </footer>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./assets/guest/js/carousel.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./assets/guest/js/filter.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'main'} */
class Block_105778708963b2ddaa521390_06615738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_105778708963b2ddaa521390_06615738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block 'main'} */
}
