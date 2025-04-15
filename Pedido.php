<?php 

    include_once('classes.php');

    class Pedido {

        private array $ItemCardapioArray;

        public function __construct() {
            $this->ItemCardapioArray = [];
        }

        public function adicionarItem(ItemCardapio $item) {
            array_push($this->ItemCardapioArray, $item);
        }

        public function resumirPedido() {
            foreach ($this->ItemCardapioArray as $key => $value) {
                echo ("<br>Prato: " . $value->getNome() . "<br> Preço: " . $value->getPreco() . "<br> <hr>" . $value->preparar());
            }
        }

    }
?>