<?php 

    include_once('classes.php');

    $Factory = new CriadorDeItem;
    $Pedido = new Pedido;

    $PratoPrincipal1 = $Factory->criarIem('PratoPrincipal');
    $PratoPrincipal1->setNome("Prato1");
    $PratoPrincipal1->setPreco(10);

    $Sobremesa1 = $Factory->criarIem("Sobremesa");
    $Sobremesa1->setNome("Sobremesa1");
    $Sobremesa1->setPreco("5");

    $Pedido->adicionarItem($PratoPrincipal1);
    $Pedido->adicionarItem($Sobremesa1);

    echo $Pedido->resumirPedido();
    

?>