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
        $tam = strlen($this->valores);
        if($tam == 7){
            return 'Valido';    
        }
        return 'Invalido';
    }
 
    public function verificaTresPrimeiros(){
        var_dump($this->valores);
        if(ctype_alpha($this->valores.substr(0,3))){
            return 'Valido';
        }
        return 'Invalido';
    }

    public function VerificaUltimos(){
        var_dump($this->valores);
        if(ctype_digit($this->valores.substr(4,7))){
            return 'Valido';
        }
        return 'Invalido';
    }
}
?>
