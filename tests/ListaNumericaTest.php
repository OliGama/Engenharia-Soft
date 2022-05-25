<?php
namespace ENGA5;

use PHPUnit\Framework\TestCase;

class ListaNumericaTest extends TestCase{

    /**
     * @dataProvider additionProvider
     */

    // public function testVerificaQuantidadeValores($vet, $expected){
    //     $ln = new ListaNumerica;
    //     $ln->setValores($vet);
    //     $this->assertEquals($expected, $ln->verificaQuantidade());
    // }

    // public function testVerificaValores($vet, $expected){
    //     $ln = new ListaNumerica;
    //     $ln->setValores($vet);
    //     $this->assertEquals($expected, $ln->verificaTresPrimeiros());
    // }

    public function testVerificaUltimos($vet, $expected){
        $ln = new ListaNumerica;
        $ln->setValores($vet);
        $this->assertEquals($expected, $ln->VerificaUltimos());
    }

    public function additionProvider() : array{
        return[
            'teste 1' => ['aaa7777','Valido'],
            'teste 2' => ['a2a8888','Invalido'],
            'teste 3' => ['aaa55a5','Valido'],
            'teste 4' => ['','Invalido'],
        ];
    }
}
?>
