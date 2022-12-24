<?php
/* Smarty version 4.3.0, created on 2022-12-21 17:27:22
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a37a3a995fc8_07263794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f48acf6e0d35a9d3128bb15ff4c12422db7147b' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Login.tpl',
      1 => 1671657972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a37a3a995fc8_07263794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147186862663a37a3a993347_38549418', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_147186862663a37a3a993347_38549418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_147186862663a37a3a993347_38549418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <main class="container mt-0  p-3">

        <div class="row d-flex justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-12 border-login bg-login">
                
                <form method="POST" action="/admin/logar">
                    <h2 class="text-white text-center">
                        Login
                    </h2>

                    <div class="form-group my-4">
                    <label class="text-dark" for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>

                    <div class="form-group my-4">
                    <label class="text-dark" for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger">Logar</button>
                    </div>
                </form>
                    
            </div>

        </div>

    </main>
    


<?php
}
}
/* {/block 'main'} */
}
