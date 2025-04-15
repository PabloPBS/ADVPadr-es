<?php 
    abstract class ItemCardapio {
        private string $nome;
        private float $preco;

        abstract public function preparar();

        public function setNome(string $nome) {
            $this->nome = $nome;
        }
        public function getNome() {
            return $this->nome;
        }

        public function setPreco(float $preco) {
            $this->preco = $preco;
        }
        public function getPreco() {
            return $this->preco;
        }
    }
?>