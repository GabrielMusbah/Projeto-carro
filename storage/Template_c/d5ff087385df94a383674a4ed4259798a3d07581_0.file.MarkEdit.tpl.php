<?php
/* Smarty version 4.3.0, created on 2022-12-16 16:28:25
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/MarkEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639cd4e90d34d2_66656432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5ff087385df94a383674a4ed4259798a3d07581' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/MarkEdit.tpl',
      1 => 1671222328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639cd4e90d34d2_66656432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_968986914639cd4e90d0c30_68823282', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_968986914639cd4e90d0c30_68823282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_968986914639cd4e90d0c30_68823282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="container p-0">

        <form action=''>
            <div class="form-group">
                
                <label class="p-1" for="descricao">Nome</label>
                <input 
                type="text" 
                id="" 
                name="" 
                class="form-control"
                value=" "
                >

                <label class="p-1" for="descricao">Descricao</label>
                <input 
                type="text" 
                id="" 
                name="" 
                class="form-control"
                value=" "
                >
                
                <label class="p-1" for="descricao">Status</label>
                <input 
                type="text" 
                id="" 
                name="" 
                class="form-control"
                value=" "
                >

                <label class="p-1" for="descricao">Marca</label>
                <input 
                type="text" 
                id="" 
                name="" 
                class="form-control"
                value=" "
                >

                <label class="p-1" for="descricao">Valor</label>
                <input 
                type="text" 
                id="" 
                name="" 
                class="form-control"
                value=" "
                >

                


            </div>
            <button class="btn btn-primary mt-3">
                Salvar
            </button>
        </form>



    </main>

<?php
}
}
/* {/block 'main'} */
}
