<?php
/* Smarty version 4.3.0, created on 2022-12-16 16:35:21
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/MarkCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639cd6896be760_74316341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7697353425f348f7fa80f635019ddfc3810e2f' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Admin/MarkCreate.tpl',
      1 => 1671222667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639cd6896be760_74316341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1621612970639cd6896bd4c7_62219785', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Template/TemplateAdminEdit.tpl");
}
/* {block 'main'} */
class Block_1621612970639cd6896bd4c7_62219785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1621612970639cd6896bd4c7_62219785',
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
