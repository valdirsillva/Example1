<?php

namespace LIVRO\Loja\Carrinho;

use LIVRO\Loja\Produto\Produto;
use ArrayObject;


class CarrinhoDeCompras 
{
      private $produtos;


      public function __construct() 
      {
          $this->produtos = new ArrayObject();   
      }

      public function adiciona(Produto $produtos ) 
      {
          $this->produtos->append($produtos);
          return $this; 
      }

      public function getProdutos() 
      {
          return $this->produtos;
      }

      public function maiorValor() 
      {
          if ( count($this->getItens()) === 0 ) {
              return 0;
          }

          $maiorValor = $this->getProdutos()[0]->getValor();

          foreach ($this->getProdutos() as $produto ) {
              
            if ($maiorValor < $produto->getValor()) {
                $maiorValor = $produto->getValor();
            }
          }

          return $maiorValor;
      }


}


