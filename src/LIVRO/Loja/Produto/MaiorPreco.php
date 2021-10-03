<?php



namespace LIVRO\Loja\Produto;

use LIVRO\Loja\Carrinho\CarrinhoDeCompras;

class MaiorPreco 
{
    public function encontra(CarrinhoDeCompras $carrinho ) 
    {
        if ( count($carrinho->getProdutos()) === 0) {
            return 0;
        }
         
        $maiorValor = $carrinho->getProdutos()[0]->getValorTotal();

        // percorre uma coleção de produtos, procurando pelo maiorValor
        foreach ( $carrinho->getProdutos() as $produto ) {
            if ( $maiorValor < $produto->getValorTotal()) {
                 $maiorValor = $produto->getValorTotal();
            }
        }

        // retorno o maiorValor
        return $maiorValor;
    }
}