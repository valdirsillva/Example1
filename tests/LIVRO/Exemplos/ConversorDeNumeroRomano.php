<?php


namespace LIVRO\Exemplos;

require "./vendor/autoload.php";

use LIVRO\Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomano extends PHPUnit 
{
   
    public function testDeveEntenderOSimboloI() 
    {
        
        $romano = new ConvesorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero); 
    }
}