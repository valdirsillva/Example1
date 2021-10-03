<?php


namespace LIVRO\Loja\Carrinho;


use LIVRO\Loja\Test\TestCase;
use LIVRO\Loja\Carrinho\CarrinhoDeCompras;
use LIVRO\Loja\Produto\MaiorPreco;
use LIVRO\Loja\Produto\Produto;



class MaiorPrecoTest extends TestCase 
{
    
    public function testDeveRetornarZeroSeCarrinhoVazio() 
    {
        $carrinho = new CarrinhoDeCompras();

        $maiorPreco = new MaiorPreco();
        $valor = $maiorPreco->encontra($carrinho);

        $this->assertEquals(0, $valor, null, 0.0001);
    }

    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento() 
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));

        // $maiorPreco = new MaiorPreco();
        // $valor = $maiorPreco->encontra($carrinho);
        
        $valor = $carrinho->maiorValor();

        $this->assertEquals(900.00, $valor, null, 0.0001);
    }

    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos() 
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona( new Produto("Geladeira", 1, 900.00));
        $carrinho->adiciona( new Produto("Fogão", 1, 1500.00));
        $carrinho->adiciona( new Produto("Máquina de lavar", 1, 750.00));

        // $maiorPreco = new MaiorPreco();
        // $Valor = $maiorPreco->encontra($carrinho);

        $valor = $carrinho->maiorValor();

        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }
}