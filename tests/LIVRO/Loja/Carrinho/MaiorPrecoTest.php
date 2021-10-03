<?php


namespace LIVRO\Loja\Carrinho;


use LIVRO\Loja\Test\TestCase;
use LIVRO\Loja\Carrinho\CarrinhoDeCompras;
use LIVRO\Loja\Produto\MaiorPreco;



class MaiorPrecoTest extends TestCase 
{
    
    public function testDeveRetornarZeroSeCarrinhoVazio() 
    {
        $carrinho = new CarrinhoDeCompras();

        $maiorPreco = new MaiorPreco();
        $valor = $maiorPreco->encontra($carrinho);

        $this->assertEquals(0, $valor, null, 0.0001);
    }
}