<?php

class Bicicleta
{
    private $codBicicleta;
    private $marca;
    private $modelo;
    private $aro;
    private $cor; 
    private $codUsuario; 

    public function setCodBicicleta($codBicicleta) {
        $this->codBicicleta = $codBicicleta;
    }

    public function getCodBicicleta() {
        return $this->codBicicleta;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setModelo($modelo) {
        $this->modelo =$modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setAro($aro) {
        $this->aro = $aro;
    }

    public function getAro() {
        return $this->aro;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    public function getCodUsuario() {
        return $this->codUsuario;
    }
}
?>
