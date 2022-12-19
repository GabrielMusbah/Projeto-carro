<?php
/* Smarty version 4.3.0, created on 2022-12-19 17:45:06
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateAdminEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0db62b589f8_09473200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f34d0980b13963fc15990759b738c48b6ee690e' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateAdminEdit.tpl',
      1 => 1671486305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0db62b589f8_09473200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../assets/admin/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" type="imagem/png" href="/assets/common/img/icon.png" />
    <title>Admin <?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin">Admin</a>
        </div>
    </nav>

    <header class="container bg-secondary mb-3">
        <h1 class="text-center text-white p-5">
            <?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

        </h1>
    </header>

    <div class="container alert alert-success">
        Deu certo fiote
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127100885863a0db62b57f50_69430485', 'main');
?>



    <?php echo '<script'; ?>
 src="./../../assets/admin/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'main'} */
class Block_127100885863a0db62b57f50_69430485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_127100885863a0db62b57f50_69430485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php
}
}
/* {/block 'main'} */
}
