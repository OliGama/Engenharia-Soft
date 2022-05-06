<?php
namespace ENGA5;

use PHPUnit\Framework\TestCase;

class ListaNumericaTest extends TestCase{

    /**
     * @dataProvider additionProvider
     */

    /*public function testVerificaQuantidadeValores($vet, $expected){
        $ln = new ListaNumerica;
        $ln->setValores($vet);
        $this->assertEquals($expected, $ln->verificaQuantidade());
    }*/

    public function testVerificaValores($vet, $expected){
        $ln = new ListaNumerica;
        $ln->setValores($vet);
        $this->assertEquals($expected, $ln->verificaValor());
    }

    public function additionProvider() : array{
        return[
            'Erro 9999' => [[],'Invalido'],
            'Erro 1000000' => [[1000000],'Invalido'],
            'Certo 11111' => [[11111],'Valido'],
            'Certo 20000' => [[20000],'Valido'],
        ];
    }

    /*
    public function testVerificaQuantidadeValoresEntradaVazio(){
        $ln = new ListaNumerica;
        $ln->setValores([]);
        $this->assertEquals('Invalido', $ln->verificaQuantidade());
    }
    public function testVerificaQuantidadeValoresEntradaTres(){
        $ln = new ListaNumerica;
        $ln->setValores([44141,41414,41141]);
        $this->assertEquals('Invalido', $ln->verificaQuantidade());
    }
    public function testVerificaQuantidadeValoresEntradaQuatro(){
        $ln = new ListaNumerica;
        $ln->setValores([44141,41414,41141,45544]);
        $this->assertEquals('Valido', $ln->verificaQuantidade());
    }
    public function testVerificaQuantidadeValoresEntradaoOnze(){
        $ln = new ListaNumerica;
        $ln->setValores([44141,41414,41141,44141,41414,41141,44141,41414,41141,44141,41414]);
        $this->assertEquals('Invalido', $ln->verificaQuantidade());
    }
    public function testVerificaQuantidadeValoresEntradaDez(){
        $ln = new ListaNumerica;
        $ln->setValores([44141,41414,41141,44141,41414,41141,44141,41414,41141,44141]);
        $this->assertEquals('Valido', $ln->verificaQuantidade());
    }
    public function testVerificaQuantidadeValoresEntradaSeis(){
        $ln = new ListaNumerica;
        $ln->setValores([44141,41414,41141,44141,41414,41141]);
        $this->assertEquals('Valido', $ln->verificaQuantidade());
    }*/
}
?>