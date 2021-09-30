<?php



namespace LIVRO\Loja\Produto;

require "./vendor/autoload.php";

use LIVRO\Loja\Carrinho\CarrinhoDeCompras;
use LIVRO\Loja\Produto\Produto;
use LIVRO\Loja\Carrinho\MaiorEMenor;

use PHPUnit_Framework_TestCase as PHPUnit;


class MaiorEMenorTest extends PHPUnit 
{
    public function testOrdemDecrescente() 
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona( new Produto("Geladeira", 450.00));
        $carrinho->adiciona( new Produto("Liquidificador", 250.00));  
        $carrinho->adiciona( new Produto("Jogo de Pratos", 70.00));
        
        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);

        $this->assertEquals("Jogo de Pratos", $maiorEMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());
    }


    public function testApenasUmProduto() 
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto("Geladeira", 450.00));

        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);

        $this->assertEquals("Geladeira", $maiorEMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());

    }
}