<?php

require('/classes/Usuario.class.php');
require('/classes/Fabricante.class.php');
require('/classes/Estoque.class.php');
require('/classes/Movimentacao.class.php');


class Main {
    public function __construct(){

        $objUsuario = new Usuario;
        var_dump( $objUsuario::getAvailableDrivers());

        $objFabricante = new Fabricante;
        $objEstoque = new Estoque;
        $objMovimentação = new Movimentacao;
        

        switch($_SERVER['argv'][1]) {
            case 'gravaUsuario':
                //$objUsuario->setDados();
                //$objUsuario->gravaDados();
                break;
            
            default:
            echo "Não existe a funcionalidade {$_SERVER['agrv'][1]}\n}";
        }
    
    }
    public function __destruct()
    {
        echo "/n/n-- Fim do programa";
    }
}
new Main;
/*
Tabelas:

itens, estoque, movimentacao, usuario, fabricante

CREATE TABLE itens (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMAR_KEY,
nome char(255) NOT NULL,
descricao char(255),
preco DOUBLE(12,2),
id_fabricante BIGINT UNSIGNED );

CREATE TABLE estoque (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome char(255));

CREATE TABLE itens_estoque(id_item BIGINT UNSIGNED NOT NULL,
id_estoque BIGINT UNSIGNED NOT NULL,
qtd BIGINT UNSIGNED NOT NULL),
PRIMARY KEY (id_tem, id_estoque));

CREATE TABLE movimentacoes(id_item BIGINT UNSIGNED NOT NULL,
id_estoque BIGINT UNSIGNED NOT NULL,
tipo ENUM('entrada', 'saida'),
qtd_movimentacao BIG INT,
datahora DATETIME,
id_usuario id BIGINT UNSIGNED NOT NULL,
PRIMARY KEY(tipo, datahora, id_usuario));

CREATE TABLE usuarios(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome char (255), cpf BITINT);

CREATE TABLE fabricantes(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome char (255), cnpj BITINT);
*/
?>