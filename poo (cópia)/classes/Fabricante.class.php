<?php
require(__DIR__.'../interfaces/fabricante.interface.php');
require(__DIR__.'/abstratas/TipoPessoa.class.php');

Class Fabricante extends TipoPessoa implements iFabricante {
    public function setDados (array $dados):bool{

    }
    public function getDados (int $id_fabricante):array{
        
    }
}
}