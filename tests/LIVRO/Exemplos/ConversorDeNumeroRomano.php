<?php


namespace LIVRO\Exemplos;

require "./vendor/autoload.php";

use LIVRO\Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit 
{
   
    public function testDeveEntenderOSimboloI() 
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero); 
    } 
}