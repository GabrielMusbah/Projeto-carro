<?php
/* Smarty version 4.3.0, created on 2022-12-15 16:39:56
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639b861c615ae6_72720888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8bf6b1b54d7bf80bacc747a0e515425b70d04f7' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/index.tpl',
      1 => 1671134032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639b861c615ae6_72720888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_877121989639b861c613ed6_46042934', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_877121989639b861c613ed6_46042934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_877121989639b861c613ed6_46042934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <main class="container">
        <div class="row d-flex justify-content-around p-4">

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="pessoa.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Usuarios</h5>
                      <a href="#" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="carro-esporte.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Carros</h5>
                      <a href="#" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="imagem-de-marca.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Marcas</h5>
                      <a href="#" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php
}
}
/* {/block 'main'} */
}
