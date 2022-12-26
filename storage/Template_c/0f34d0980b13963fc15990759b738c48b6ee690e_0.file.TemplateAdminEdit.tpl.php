<?php
/* Smarty version 4.3.0, created on 2022-12-26 17:20:57
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateAdminEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63aa1039604602_34995692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f34d0980b13963fc15990759b738c48b6ee690e' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateAdminEdit.tpl',
      1 => 1672089562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aa1039604602_34995692 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Admin <?php echo (($tmp = $_smarty_tpl->tpl_vars['titleNav']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</title>
</head>
<body>

    <?php if ($_smarty_tpl->tpl_vars['logged']->value == true) {?>
        <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin">Admin</a>
            <a class="navbar-brand" href="/admin/deslogar">Sair</a>
        </div>
        </nav>
    <?php }?>

    <header class="container bg-secondary mb-3">
        <h1 class="text-center text-white p-5">
            <?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

        </h1>
    </header>

    <div class="container alert alert-success">
        Deu certo fiote
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159782879363aa1039603ea3_00930678', 'main');
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
class Block_159782879363aa1039603ea3_00930678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_159782879363aa1039603ea3_00930678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php
}
}
/* {/block 'main'} */
}
