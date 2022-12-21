<?php
/* Smarty version 4.3.0, created on 2022-12-20 10:32:32
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateGuestLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1c780bee7e5_89716857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b9e1fc7069e80b6935f184e3e470c143e3eb26' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateGuestLogin.tpl',
      1 => 1671546635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1c780bee7e5_89716857 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="icon" type="imagem/png" href="./assets/common/img/icon.png" />
    <title>Legendary - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

    <main class="container mt-4  p-3">

        <div class="row d-flex justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-12 p-5 border-login bg-login">
                
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_630436063a1c780bedd84_15784559', 'form');
?>

                
            </div>

        </div>

    </main>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'form'} */
class Block_630436063a1c780bedd84_15784559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_630436063a1c780bedd84_15784559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <?php
}
}
/* {/block 'form'} */
}
