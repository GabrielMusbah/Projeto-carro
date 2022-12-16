<?php
/* Smarty version 4.3.0, created on 2022-12-16 14:45:42
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639cbcd6cd9177_58825816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc692c152b0780c7890b8b41960e1df51f4ac6c3' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/Index.tpl',
      1 => 1671216337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639cbcd6cd9177_58825816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103615891639cbcd6cd7db9_98218962', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_103615891639cbcd6cd7db9_98218962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_103615891639cbcd6cd7db9_98218962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <main class="container">
        <div class="row d-flex justify-content-around p-4">

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/user.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Usuarios</h5>
                      <a href="/admin/usuario" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/car.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Carros</h5>
                      <a href="/admin/carro" class="btn btn-dark d-flex justify-content-center">Editar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center m-3">
                <div class="card border border-secondary">
                    <img src="./assets/admin/img/mark.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center">Marcas</h5>
                      <a href="/admin/marca" class="btn btn-dark d-flex justify-content-center">Editar</a>
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
