<?php
/* Smarty version 4.3.0, created on 2022-12-14 17:29:23
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/TemplateGuestLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639a403343cd62_97854724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524d1ec418d21826767ccaf4a9f8ebb00eab45c2' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Guest/TemplateGuestLogin.tpl',
      1 => 1671053312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639a403343cd62_97854724 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="icon" type="imagem/png" href="/img/icon.png" />
    <title><?php echo $_smarty_tpl->tpl_vars['listVar']->value['title'];?>
</title>
</head>
<body>

    <main class="container mt-4 p-3 border-login bg-login">

        <div class="row d-flex justify-content-center">

            <div class="col-6 p-5">
                <form>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300351441639a403343bfc0_04064562', 'form');
?>

                </form>
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
class Block_300351441639a403343bfc0_04064562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_300351441639a403343bfc0_04064562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                    <?php
}
}
/* {/block 'form'} */
}
