<?php
class Genero {
    private $idGenero;
    private $nome;


    function inserirGenero($idGenero, $nome) {
        $this->idGenero = $idGenero;
        $this->nome = $nome;
    }
    
    function getIdGenero() {
        return $this->idGenero;
    }

    function getCateoria() {
        return $this->nome;
    }

  /*------------------------------------------------------*/

    function setIdGenero($idGenero) {
        $this->idGenero = $idGenero;
    }

    function setCategoria($nome) {
        $this->nome = $nome;
    }

}
