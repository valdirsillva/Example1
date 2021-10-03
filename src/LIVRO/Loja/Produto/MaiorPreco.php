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
        return $carrinho->getProdutos()[0]->getValorTotal();
    }
}