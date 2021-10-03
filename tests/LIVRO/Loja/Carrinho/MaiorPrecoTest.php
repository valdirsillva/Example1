<?php


namespace LIVRO\Loja\Carrinho;

require "./vendor/autoload.php";

use LIVRO\Loja\Carrinho\CarrinhoDeCompras;
use LIVRO\Loja\Carrinho\MaiorPreco;

use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorPrecoTest extends PHPUnit 
{
    
    public function testDeveRetornarZeroSeCarrinhoVazio() 
    {
        $carrinho = new CarrinhoDeCompras();

        $maiorPreco = new MaiorPreco();
        $valor = $maiorPreco->encontra($carrinho);

        $this->assertEquals(0, $valor, null, 0.0001);
    }
}