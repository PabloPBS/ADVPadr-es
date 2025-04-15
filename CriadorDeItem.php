<?php 

    include_once('classes.php');
    
    class CriadorDeItem {
        public function criarIem(string $item) {
            switch ($item) {
                case 'PratoPrincipal':
                    return new PratoPrincipal();
                    break;
                case 'Sobremesa':
                    return new Sobremesa();
                    break;
            }
        }
    }
?>