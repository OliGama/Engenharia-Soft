<?php
namespace ENGA5;
class ListaNumerica{
    private $valores;

    public function setValores($valores){
        $this->valores= $valores;
    }

    public function getValores(){
        return $this->valores;
    }

    public function verificaQuantidade(){
        $tam = sizeof($this->valores);
        if($tam >=4 && $tam<=10){
            return 'Valido';
        }
        return 'Invalido';
    }

    public function verificaValor(){
        foreach($this->valores as $valor){
            if($valor >= 10000 && $valor <= 99999){
                return 'Valido';
            }
        }
        return 'Invalido';
    }
}

/*$ln = new ListaNumerica;
$ln->setValores([99999,10000,12345,65432]);
print_r($ln->getValores());
echo $ln->verificarQuantidade();
echo $ln->verificaValor();*/
?>