<?php
require(__DIR__.'../interfaces/usuario.interface.php');
require(__DIR__.'/abstratas/TipoPessoa.class.php');

Class Usuario extends TipoPessoa implements iUsuario{
    public function __construct(){
        parent:: __construct();
    }
    public function setDados (array $dados):bool
    {
        
    }
    public function getDados (int $id_usuario):array
    {

    }
}