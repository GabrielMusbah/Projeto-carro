<?php
/* Smarty version 4.3.0, created on 2022-12-16 11:37:26
  from '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateGuestSale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639c90b67f1070_00680921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69e82ffb170326087709f819c367e9cf1dc0f07' => 
    array (
      0 => '/opt/lampp/htdocs/Projeto-carro/src/View/Template/TemplateGuestSale.tpl',
      1 => 1671198769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639c90b67f1070_00680921 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1746444894639c90b67f0511_63284059', 'main');
?>


    </main>

    <footer class="bg-preto border-top-red mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 row d-flex justify-content-around p-3">
                    <img src="./assets/guest/img/icon/IconFerrari.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconLamborghini.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconMazda.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconBmw.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconMercedes.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconMaserati.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconJeep.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconVolvo.png" style="width: 100px;" alt="">
                    <img src="./assets/guest/img/icon/IconToyota.png" style="width: 100px;" alt="">
                </div>
                <h3 class="text-center p-2 pt-0 m-0 text-white col-12">© 2022 Musbah Saleh</h3>
            </div>
        </div>
    </footer>




    <div class="modal fade" id="msg_buy_make" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-border-modal-buy-make  row p-4">
                    <h3 class="text-center mb-3 text-white col-12">Obrigado pela compra.</h3>
                    <p class="text-white col-12 mb-3" style="text-align: justify;">O veiculo comprado vai ser enviado para sua garagem nos proximos minutos, faça um bom uso da sua nova propriedade, qualquer duvida sera um prazer te ajudar</p>
                    <p class="text-white col-8 mb-0 d-flex align-self-center" >Cell: 999 8734 2345</p>
                    <button type="button" data-bs-dismiss="modal" class="button-red-white py-2 col-4">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    

    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'main'} */
class Block_1746444894639c90b67f0511_63284059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1746444894639c90b67f0511_63284059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block 'main'} */
}
